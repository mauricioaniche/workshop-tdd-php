# Instalando PHP no Mac

```
brew tap homebrew/dupes

brew tap homebrew/versions

brew tap homebrew/homebrew-php

brew install php56
```

# Baixando as dependências

```
php composer.phar install
php composer.phar update
```

# Rodando os testes

```
./vendor/bin/phpunit tests
```