<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PersmissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	//Users
    	Permission::create([

    		'name'  => 'Navegar usuarios',
    		'slug'  => 'users.index',
    		'description' =>'Lista y navega todos los usuarios del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Ver detalle de usuario',
    		'slug'  => 'users.show',
    		'description' =>'Ver en detalle cada usuario del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Edición usuarios',
    		'slug'  => 'users.edit',
    		'description' =>'Editar cualquier dato de un usuario del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Eliminar usuario',
    		'slug'  => 'users.destroy',
    		'description' =>'Eliminar cualquier usuario del sistema',

    	]);

    	//Roles
    	Permission::create([

    		'name'  => 'Navegar roles',
    		'slug'  => 'roles.index',
    		'description' =>'Lista y navega todos los roles del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Ver detalle de roles',
    		'slug'  => 'roles.show',
    		'description' =>'Ver en detalle cada rol del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Creación de roles',
    		'slug'  => 'roles.create',
    		'description' =>'Ver en detalle cada rol del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Edición roles',
    		'slug'  => 'roles.edit',
    		'description' =>'Editar cualquier dato de un rol del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Eliminar roles',
    		'slug'  => 'roles.destroy',
    		'description' =>'Eliminar cualquier rol del sistema',

    	]);

    	//Prductos
    	Permission::create([

    		'name'  => 'Navegar productos',
    		'slug'  => 'products.index',
    		'description' =>'Lista y navega todos los productos del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Ver detalle de productos',
    		'slug'  => 'products.show',
    		'description' =>'Ver en detalle cada producto del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Creación de productos',
    		'slug'  => 'products.create',
    		'description' =>'Ver en detalle cada producto del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Edición productos',
    		'slug'  => 'products.edit',
    		'description' =>'Editar cualquier dato de un producto del sistema',

    	]);
    	Permission::create([

    		'name'  => 'Eliminar productos',
    		'slug'  => 'products.destroy',
    		'description' =>'Eliminar cualquier producto del sistema',

    	]);


    }
}
