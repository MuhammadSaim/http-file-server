<div class="container">
  <div class="row mt-lg-5 mt-md-5 mt-sm-5 mt-xs-5">
    <div class="col-md-8 offset-md-2 col-sm-12 col-xs-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Sr.</th>
            <th>Name</th>
            <th>Size</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $wordCount = 50;
            $count = 1;
            $files = sortFiles(getAllFiles());
            $fileIcons = getAllFileIcons();
            foreach ($files as $file):
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            $ext = (in_array($ext.'.svg', $fileIcons)) ? $ext.'.svg' : 'file.svg';
            $fileSize = getSize('./uploads/'.$file);
          ?>
              <tr>
                <td width="10%"><b><?= $count++; ?></b></td>
                <td>
                  <img src="./assets/images/file-icons/<?= $ext ?>" alt="<?= $ext ?>">
                  <span data-toggle="tooltip" data-placement="bottom" title="<?= $file ?>">
                    <?= (strlen($file) > $wordCount) ? substr($file, 0, $wordCount).'...' : $file ?>
                  </span>
                </td>
                <td>
                <b><?= $fileSize ?></b>
                </td>
                <td width="15%">
                  <a href="#" Download="<?= $file ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Download">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" Download="<?= $file ?>"  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
