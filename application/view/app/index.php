<?php
$this->include('app.layouts.header' , ['categories' => $categories]);

// var_dump($articles);
?>

<section class="container my-5">
    <!-- Example row of columns -->
    <section class="row">
        <?php foreach($articles as $article){ ?>
        <section class="col-md-4">
            <h2 style="font-size: 1.2rem; font-weight: bold;" ><?= $article['title']; ?></h2>
            <p><?= substr($article['body'] , 0,120). '...' ; ?> </p>
            <p><a class="btn btn-primary" href="<?php $this->url('home/show/'.$article['id']); ?>" role="button">
            View details >></a></p>
        </section>
        <?php } ?>
    </section>
</section>

<?php $this->include("app.layouts.footer"); ?> 