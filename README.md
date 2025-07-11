# Laravel 12 Livewire 透過 OpenAI 應用程式介面產生搜尋引擎最佳化（SEO）標題

過長的標題可能會因此被截斷或遭到搜尋引擎刪減，對使用者來說也不容易快速理解，因此在撰寫網頁標題時，記得要把握「簡明扼要」的原則，在限制字數內向使用者精準傳遞網頁相關的資訊。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/post/create` 來進行文章新增。

----

## 畫面截圖
![](https://i.imgur.com/4U7a6Tp.gif)
> 提供更加精準且有深度的內容建議
