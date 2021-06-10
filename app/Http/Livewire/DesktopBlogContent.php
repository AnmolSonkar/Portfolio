<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DesktopBlogContent extends Component
{
    public $search, $TotalResults = 3;

    protected $listeners = [

        'load-more' => 'loadMore',
    ];

    public function loadMore()
    {
        $this->TotalResults += 3;
    }

    public function render()
    {
        $results = [];

        if (strlen($this->search) > 2) {
            $results = DB::table('Blog')->where('Heading', 'LIKE', '%' . $this->search . '%')->get();
        }

        $blogs = DB::table('Blog')->paginate($this->TotalResults);
        return view('livewire.desktop-blog-content', compact('blogs'), [
            'results' => $results
        ]);
    }
}
