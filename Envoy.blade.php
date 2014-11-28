@servers(['web' => 'vagrant@192.168.10.10'])

@task('deploy')
    cd Develop/temoa
    composer update
    php artisan migrate
    bower update
    gulp
@endtask
