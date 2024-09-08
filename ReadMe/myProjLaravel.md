# Install Laravel and Create Project
## Install Laravel
two ways

1. laravel installer
2. composer create-project

### Laravel Installer
```
/workspaces/ContainerWebPhpDev (main) $ composer global require laravel/intaller
```
Create project

```
laravel new myProj

```
### Composer Create-Project

```
/workspaces/ContainerWebPhpDev (main) $ composer create-project --prefer-dist laravel/laravel myProj
```

# Start Development Server
```
myProj>php artisan serve
```