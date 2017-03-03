<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function hasInex($table $name){//$table 表名　$name 字段名　检测索引是否存在

        $conn= Schema::getConnection();
        $dbSchemaManager=$conn->getDoctrineSchemaManager();
        $doctrineTable=$dbSchemaManager->listTableDetails($table);
        return $doctrineTable->hasIndex($name);



    }

    public function up()
    {

        if (!Schema::hasTable('c')) {


            Schema::create('c', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('airline');
                $table->timestamps();
                $table->string('class');
                $table->string('age');
            });

        } else {

            Schema::table('c', function ($table) {

                if (!Schema::hasColumn('c', 'sex')) {

                    $table->string('sex');　//添加字段
                }


                if(Schema::hasColumn('c', 'name')){

                    $table->string('name', 50)->change();//修改字段
                }

                if(Schema::hasColumn('c', 'class')){

                    $table->dropColumn('class');//删除字段
                }

                $table->string('email')->unique();　//创建索引

                if($this->hasIndex('c','users_email_unique')){

                    $table->dropUnique('users_email_unique'); //删除索引
                }


            });


        }
    }


//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
        public function down()
        {
            //Schema::dropIfExists('c');//回滚时执行

        }//这种方法刷新好原来的数据会丢失,当用上面的方法写代码时不要删除表，还有一种方法就像文档中那样但是原来的数据会丢失（删除表）
            //重新刷新表时先回滚　在迁移
    }

