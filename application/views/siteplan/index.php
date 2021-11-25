
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data <?php echo $title;?></h3><br>
                  <button type="button" id="btn-xls-export"  class="btn btn-info btn-simple btn-xs">ExportXSL</i>
                </button>
                <button type="button"   data-toggle="modal" data-target="#modal-filter-data" class="btn btn-info btn-simple btn-xs" >Filter</i>
                </button>
                <?php if ($tower != null){ ?>
                     <input type="text" id="nmTower" hidden value="<?php echo $tower;?>"/>
                <?php } ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="overflow-x:auto;overflow-y:auto;" >
              <table id="viewDataTable" class="table table-bordered table-hover">
                  <thead>

                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Lantai MKT</th>
                    <?php
                    if($siteplan5 != null ){ 
                      foreach (range(1, 80) as $number) { 
                        if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){ ?>
                         
                        <th scope="col"><?php echo $number;?></th>
                    <?php }
                    } ?>
                    
                    
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1.</td>
                    <td>39</td>
                    <?php foreach (range(1, 80) as $number) { 
                     
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan39 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>38</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan38 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>

                  <tr>
                    <td>3.</td>
                    <td>37</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan37 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>


                  <tr>
                    <td>4.</td>
                    <td>36</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan36 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>


                  <tr>
                    <td>5.</td>
                    <td>35</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan35 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>
                  
                  <tr>
                    <td>6.</td>
                    <td>33</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan33 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>

                  <tr>
                    <td>7.</td>
                    <td>32</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan32 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>


                  <tr>
                    <td>8.</td>
                    <td>31</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan31 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>

                  <tr>
                    <td>9.</td>
                    <td>30</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan30 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>


                  <tr>
                    <td>10.</td>
                    <td>29</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan29 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>

                  <tr>
                    <td>11.</td>
                    <td>28</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan28 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>

                  <tr>
                    <td>12.</td>
                    <td>27</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan27 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>


                  <tr>
                    <td>13.</td>
                    <td>26</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan26 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                    } ?>
                  </tr>


                  <tr>
                    <td>14.</td>
                    <td>25</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan25 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     } ?>
                  </tr>


                  <tr>
                    <td>15.</td>
                    <td>23</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan23 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>16.</td>
                    <td>21</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan21 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>17.</td>
                    <td>20</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan20 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>


                  <tr>
                    <td>18.</td>
                    <td>19</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan19 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>19.</td>
                    <td>18</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan18 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>


                  <tr>
                    <td>20.</td>
                    <td>17</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan17 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>


                  <tr>
                    <td>21.</td>
                    <td>16</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan16 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>22.</td>
                    <td>15</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan15 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>23.</td>
                    <td>12</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan12 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>24.</td>
                    <td>11</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan11 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>25.</td>
                    <td>10</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan10 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>26.</td>
                    <td>9</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan9 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>27.</td>
                    <td>8</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan8 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>28.</td>
                    <td>7</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan7 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>


                  <tr>
                    <td>29.</td>
                    <td>6</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan6 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>

                  <tr>
                    <td>30.</td>
                    <td>5</td>
                    <?php foreach (range(1, 80) as $number) { 
                     if($number != 4 AND $number != 13 AND $number != 14 AND $number != 24 AND $number != 34 AND $number != 40 AND $number != 41 AND $number != 42 AND $number != 43 AND $number != 44 AND $number != 45 AND $number != 46 AND $number != 47 AND $number != 48 AND $number != 49 AND $number != 54 AND $number != 64 AND $number != 74){
                    ?>
                    <td><?php
                          foreach($siteplan5 as $row){
                            if(substr($row['unit'],-2) == $number) {
                             echo substr($row['unit'],-7);
                            }
                          }
                        ?>
                    </td>
                    <?php }
                     }
                     ?>
                  </tr>




                  
                

                
                  <?php } ?>                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-filter-data">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <h4 class="modal-title">Pilih Tower</h4>
            </div>
                <form method="POST" action="<?= base_url('SitePlan');?>" enctype="multipart/form-data" >
                <div class="modal-body">
                    <!-- select -->
                    <div class="form-group">
                    <label>Tower</label>
                    <select  name="nameTower" class="form-control">
                    <option value="0">--TOWER--</option>
                    <?php
                                        
                    for($x=1;$x<7;$x++){?>
                                            
                    <option value="<?php echo $x;?>"><?php echo $x;?></option>
                    <?php } ?>
                    </select>
                    </div>               
                </div>
                <div class="modal-footer">
          
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>                
        </div>
                <!-- /.modal-content -->
    </div>
                <!-- /.modal-dialog -->
</div> 

<script text="javascript">
   $(document).ready(function(){

    // setInterval(function(){

    //       var nmTower = $("#nmTower").val();;
       
    //       $.ajax({
    //         type: "POST",
    //         data: {
    //           "nameTower" : nmTower
    //         },
    //         url: "<?= base_url('SitePlan');?>",
    //         success: function(data){
    //           $(".row").html(data);
    //         }
    //       });
    
      
    // }, 2000) /* time in milliseconds (ie 2 seconds)*/

   });


</script>