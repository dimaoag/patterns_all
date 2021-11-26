<?php

declare(strict_types=1);

namespace App\Structural\Composite\Form;

class EntryPoint
{
    public function run(): void
    {
        $form = $this->createForm();
        echo $form->render();
        /* Output
            <form action="/product/add">
            <h3>Add product</h3>
            <label for="name">Name</label>
            <input name="name" type="text" value="Apple MacBook">
            <label for="description">Description</label>
            <input name="description" type="text" value="A decent laptop.">
            <fieldset><legend>Product photo</legend>
            <label for="caption">Caption</label>
            <input name="caption" type="text" value="Front photo.">
            <label for="image">Image</label>
            <input name="image" type="file" value="photo1.png">
            </fieldset>
            </form>
         */
    }

    /**
     * Клиентский код получает удобный интерфейс для построения сложных древовидных
     * структур.
     */
    private function createForm(): FormElement
    {
        $form = new Form('product', "Add product", "/product/add");
        $form->add(new Input('name', "Name", 'text'));
        $form->add(new Input('description', "Description", 'text'));

        $picture = new Fieldset('photo', "Product photo");
        $picture->add(new Input('caption', "Caption", 'text'));
        $picture->add(new Input('image', "Image", 'file'));
        $form->add($picture);

        $data = [
            'name' => 'Apple MacBook',
            'description' => 'A decent laptop.',
            'photo' => [
                'caption' => 'Front photo.',
                'image' => 'photo1.png',
            ],
        ];

        $form->setData($data);

        return $form;
    }
}
