<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <h1 class="is-size-1">Edit Article</h1>
    <div class="buttons has-addons">
        <a class="button is-info" href="/admin/articles">Back</a>
    </div>

    <form action="/admin/articles/edit?id=<?=$article->id?>" method="POST">
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input class="input" type="text" placeholder="Title" name="title" id="title" value="<?=$article->title?>">
            </div>
        </div>
        <div class="field">
            <label class="label" for="body">Content</label>
            <div class="control">
                <textarea class="textarea" placeholder="Content..." name="body" id="body"><?=$article->body?></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit">
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>