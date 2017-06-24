@extends('_includes.blog_post_base')

@section('post::title', 'How to build a blog without a database')
@section('post::date', 'June 24, 2017')
@section('post::brief', 'This is a simple step by step guide on how to easily build and deploy a Website/blog without a database. This is made possible by Katana powered by Laravel')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    Katana is shipped with a static blog generator, all you need to do is create a new .blade.php file in the /content/_blog directory and Katana will compile all the posts and present them in a view of your choice.

    Blog posts list is paginated based on the configuration options in config.php. There's also a $blogPosts variable available in all your blade views that contains an array of posts.
    > Design for change

    No design is ever finished or done. Don’t be afraid of throwing away work, features or designs, good design is always evolving and grows with the business. Design with change in mind will allow us to quickly adapt to new learnings and insights. Every feature or functionality that is introduced needs time to improve. Once something is launched, evaluating performance and iteration should be the focus.

    [Read the complete article on Medium](https://github.com/barnyp/katanasite)
    @endmarkdown

@stop