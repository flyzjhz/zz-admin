namespace addons\demo\controller;

use think\addons\Controller;

class Admin extends Controller
{
    // 索引入口
    public function index()
    {
        return 'hello addons admin';
    }
}