<?php
namespace app\index\controller;

use gmars\rbac\Rbac;
use Jenssegers\Agent\Agent;
class Index
{
    public function index()
    {
        $rbacObj = new Rbac();
        $rbacObj->assignRolePermission(1, [1, 2]);




    }
}
