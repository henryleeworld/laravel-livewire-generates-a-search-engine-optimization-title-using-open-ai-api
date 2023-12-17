<?php

namespace App\Livewire;

use App\Models\Post;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

#[Layout('layouts.app')]
class CreatePost extends Component
{
    #[Validate('required|min:3|max:255')]
    public string $title = '';

    public array $suggestedTitles = [];

    #[Validate('required')]
    public string $content = '';

    public function render(): View
    {
        return view('livewire.create-post');
    }

    public function save()
    {
        $this->validate();
        Post::create(
            $this->only(['title', 'content'])
        );
        $this->redirect('/posts');
    }

    public function suggestTitles(): void
    {
        $this->validateOnly('title');
        try {
            $result = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => __('This is a blog post title:') . PHP_EOL . $this->title . PHP_EOL . __('Improve it for SEO and provide 5 alternative titles')],
                ],
            ]);
            $this->suggestedTitles = array_slice(preg_split('/\r\n|\r|\n/', $result->choices[0]->message->content), -5, 5);
        } catch (Exception $e) {
            info($e->getMessage());
            throw ValidationException::withMessages(['title' => __('Something went wrong.')]);
        }
    }

    public function useTitle(int $key): void
    {
        $this->title = Str::of($this->suggestedTitles[$key])->after('. ')->remove('"');
    }
}
