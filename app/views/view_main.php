<h1><?php echo $this->title ?></h1>
<p>
<img src="/images/office-small.jpg" alt="small">
<a href="/">link</a>
</p>

<div class="wrapper">
    <ul class="top-menu">
        <?php
        foreach ($this->getElementsToDisplay() as $item) {
            ?>
            <li class="blocks">
                <a href="#">
                    <?php echo $item["name"];?>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>