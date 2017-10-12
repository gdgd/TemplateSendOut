# お試しlaravelプロジェクト

## セットアップ

phpとかcomposerとかインストール済みの前提で以下実行。

<pre>git clone https://github.com/gdgd/my_laravel.git laravel
cd laravel
composer install
composer run-script post-root-package-install
composer run-script post-create-project-cmd
composer run-script post-autoload-dump
</pre>

どこまでファイル管理したらいいかわからんが、vendorは除外。
.envも除外。

