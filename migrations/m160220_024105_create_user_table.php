<?php

use yii\db\Migration;

class m160220_024105_create_user_table extends Migration
{
    const TBL_NAME = "blog_user";

    public function safeUp()
    {     
        $this->createTable(self::TBL_NAME, [
            'uid' => $this->primaryKey(),
            'uname' => $this->string(20),
            'upassword' => $this->string(32)
        ]);
        
        $this->insert(self::TBL_NAME, [
            'uname' => 'admin',
            'upassword' => md5("admin")
        ]);
    }

    public function safeDown()
    {
        $this->delete(self::TBL_NAME,['id'=>1]);
        $this->dropTable(self::TBL_NAME);
    }
}