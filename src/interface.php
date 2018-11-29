<?php


interface Content
{
    /**
     * copy method
     * @return mixed
     */
    public function copy();
}

class Text implements Content
{

    public function copy()
    {
        return "this is text";
    }
}

class Img implements Content
{

    public function copy()
    {
        return "this is image";
    }

}

class Edit
{
    public $content;

    /**
     * run constructor.
     * @param $demo
     */
    public function __construct(Content $content)
    {
        $this->content = $content;
    }

}


$img = new Img();
$text = new Text();

$edit = new Edit($text);
echo $edit->content->copy(); //this method can keep always do copy.

