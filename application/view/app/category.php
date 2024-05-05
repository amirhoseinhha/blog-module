<?php
$this->include('app.layouts.header' , ['categories' => $categories]);
?>

<section class="container my-5">
    <section class="row">
        <section class="col-12">
            <h1><?= $category['name'] ?></h1>
            <hr>
        </section>
    </section>
    <section class="row">
        <?php 
        if($articles != null){
        foreach($articles as $article){ ?>
        <section class="col-md-4">
            <h2><?= $article['title']; ?></h2>
            <p> <?= substr($article['body'],0,120).'...' ; ?> </p>
            <p><a class="btn btn-primary" href="<?php $this->url('home/show/'.$article['id']); ?>" role="button">View details »</a></p>
        </section>
        <?php } }else{?><h1 style=" margin: auto; "> <?php echo "خبری در دسته بندی [".$category['name'] ."] وجود ندارد";?> </h1> <?php }?>
    </section>
</section>

<?php $this->include("app.layouts.footer"); ?>