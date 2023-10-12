<?php

    namespace App\Http\Controllers;

    use App\Models\Category;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\View\View;

    class MainController extends Controller
    {
        function index(): View
        {
            // $category = new Category();

            // $category->name = 'Category 4';
            // $category->description = 'Descriprion to Category 4';
            // $category->save();
            // dd($category->id);

            $allCategories = Category::all();
            // dd($allCategories);

            $title = 'Main Page';
            // $subtitle = '<em>Subtitle</em>';
            // $users = ['Tom', 'Bill', 'Mike'];

            // return view('index', compact('title', 'subtitle', 'users'));

            return view('index', compact('title', 'allCategories'));
        }

        function contacts(): View
        {
            return view('contacts');
        }

        function sendEmail(Request $request): RedirectResponse
        {
            $request->validate
            ([
                'name' => 'required|min:2|max:15',
                'email' => 'required|email',
                'message' => 'required|min:5'
            ]);
            // dd($request->name);

            $name = $request->name;
            $email = $request->email;
            $message = $request->message;

            mail('valeriy.stronskiy@gmail.com', 'Test_Subject', "$name, $email, $message");

            // return redirect('/contacts')->with('success', 'Thank you!'); по url
            // return redirect()->route('contacts')->with('success', 'Thank you!'); по назві маршрута
            //return to_route('contacts')->with('success', 'Thank you!'); по назві маршрута
            return redirect()->back()->with('success', 'Thank you!'); // повернення на попередню сторінку
        }
    }
