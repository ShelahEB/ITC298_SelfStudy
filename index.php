<?php get_header();?>

<!--
    <?php while(have_posts()) : the_post(); ?>

        <div class="post">
            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="meta">Posted by <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a> on <?php the_time('F jS, Y'); ?>
            &nbsp;&nbsp;&nbsp; <a href="<?php comments_link(); ?>" class="comments"> 
            <?Php comments_number('0 Comments', '1 Comment', '%responses'); ?>
            </a>&nbsp;&nbsp;&nbsp; <a href="<?php the_permalink(); ?>" class="permalink">Full article</a></p>
            
            <div class="entry"><a href="<?php the_permalink(); ?>" class="image">
                <?php the_post_thumbnail('full'); ?>
                </a>
                    <?php the_content('Read More'); ?>      
            </div>

        </div>


-->

<div id="content" class="container">
    
    <div class="main" role="main"></div>
    <div class="sidebar"></div>
    
</div>


<!--
<div id="sidebar" class="container .col-xs-6 .col-md-4">
            <h2>Sidebar</h2>
        
        
        </div>
        
        <div id="middle" class="container .col-xs-12 .col-md-8">
            <h2> Middle</h2>
            
        </div>


</div>
-->
<?php get_footer(); ?>
