<body>
  <main>
    <div class="container">
      <div class="row my-5">
        <h3 class="mb-5">Food</h3>
        <?php foreach ($foods as $food) : ?>
          <div class="col-3">
            <div class="card">
              <img src="<?php echo $food->image ?>" class="card-img-top" alt="<?php echo $food->name ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $food->name ?></h5>
                <p class="card-text brand"><span><?php echo $food->category->icon ?></span> <?php echo $food->brand ?> - <?php echo $food->type  ?> - <?php echo $food->weight  ?></p>
                <p class="card-text price">$<?php echo $food->price ?></p>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
      <div class="row my-5">
        <h3 class="mb-5">Toys</h3>
        <?php foreach ($toys as $toy) : ?>
          <div class="col-3">
            <div class="card">
              <img src="<?php echo $toy->image ?>" class="card-img-top" alt="<?php echo $toy->name ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $toy->name ?></h5>
                <p class="card-text brand"><span><?php echo $toy->category->icon ?></span> <?php echo $toy->brand ?> - <?php echo $toy->feature  ?> - <?php echo $toy->size  ?></p>
                <p class="card-text price">$<?php echo $toy->price ?></p>

              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
      <div class="row my-5">
        <h3 class="mb-5">Accessories</h3>
        <?php foreach ($accessories as $accessory) : ?>
          <div class="col-3">
            <div class="card">
              <img src="<?php echo $accessory->image ?>" class="card-img-top" alt="<?php echo $accessory->name ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $accessory->name ?></h5>
                <p class="card-text brand"><span><?php echo $accessory->category->icon ?></span> <?php echo $accessory->brand ?> - <?php echo $accessory->material  ?> - <?php echo $accessory->size  ?></p>
                <p class="card-text price">$<?php echo $accessory->price ?></p>

              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </main>
</body>