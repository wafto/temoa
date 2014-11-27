@servers(['web' => 'vagrant@192.168.10.10'])

@task('deploy')
	cd Develop/temoa
    composer update
    bower update
    gulp
@endtask
