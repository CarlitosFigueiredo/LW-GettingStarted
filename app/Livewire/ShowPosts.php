<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ShowPosts extends Component
{

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }

    #[Computed()]
    protected function posts()
    {
        return Post::all();
    }
}
