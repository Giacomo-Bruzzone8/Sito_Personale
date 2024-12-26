<?php

namespace App\Livewire;

use Livewire\Component;

class CreateArticleForm extends Component
{
    #[Validate('required|min:5|max:25')]
    public $title;
    #[Validate('required|min:10')]
    public $price;
    #[Validate('required|numeric')]
    public $description;
    #[Validate('required|max:60')]
    public $category;
    public $article;

    public function messages()
    {
        return [
            'title' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Caratteri minimi :min ',
            'title.max' => 'Caratteri massimi :max',
            'price' => 'Il campo prezzo è obbligatorio',
            'price.numeric' => 'Il campo prezzo deve contenere caratteri numerici',
            'description' => 'Il campo descrizione è obbligatorio',
            'description.max' => 'Caratteri massimi :max',
            'category' => 'Il campo categoria è obbligatorio',

        ];
    }

    public function save(){
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
            
        ]);
        session()->flash('success', 'Prodotto aggiunto con successo');
        $this->cleanForm();
    }

    protected function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        
    }
    public function render()
    {
        return view('livewire.create-article-form');
    }
}
