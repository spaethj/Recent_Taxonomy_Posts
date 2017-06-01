# Recent Taxonomy Posts
Recent Taxonomy Posts is a widget for Wordpress how allow to show recent posts from taxonomy named "Type d'article".

The widget is register in file ignored by Github. The widget can then be registered using the widgets_init hook:

```php
add_action( 'widgets_init', function(){
    register_widget( 'Recent_Taxonomy_Posts' );
});
```