namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // نمایش همه کاربران
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        // ساخت کاربر جدید
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function show($id)
    {
        // نمایش یک کاربر خاص
        return response()->json(User::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        // ویرایش کاربر
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user);
    }

    public function destroy($id)
    {
        // حذف کاربر
        User::findOrFail($id)->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
}
