<?php
/*@var $this Controller*/
/*@var $catalog Catalog*/
$nameEN = array(
    'T-shirts', "Kids Fashion", "Hand Stitched Leather"
);

$nameVN = array (
    'Áo Phông', 'Thời Trang Trẻ Em', 'Da Khâu Bằng Tay'
);

$language =Yii::app()->request->cookies['language']->value;

?>
<div id="sidebar">
	<?php
        if ($language == Location::LANGUAGE_ENGLISH)
        {
            foreach($nameEN as $name)
            {
            ?>
            <div>
                    <?php echo $name?>
            </div>

            <?php
                    foreach($catalogs as $catalog)
                    {
                            if($name == $catalog->nameEN)
                                    echo CHtml::link($catalog->subNameEN, $this->createUrl('product/index', array('catalogID' => $catalog->id)))."<br />";
                    }
                    echo "<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>";
            }
            echo '<div>Online support <br><br></div>';
            echo '<table width="100%">';
                echo '<tr align="middle">';
                    echo '<td>';
                        echo '<a href="ymsgr:sendim?DKB.vietnam1"><img src="http://opi.yahoo.com/online?u=forever_together23&m=g&t=1" alt="Send yahoo message title="Yahoo chat support" border=0></a>';
                    echo '</td>';
                    echo '<td>';
                        echo '<a href="ymsgr:sendim?DKB.vietnam2"><img src="http://opi.yahoo.com/online?u=forever_together23&m=g&t=1" alt="Send yahoo message title="Yahoo chat support" border=0></a>';
                    echo '</td>';
                echo '</tr>';
                echo '<tr align="middle">';
                    echo '<td>';
                        echo 'Sale 1';
                    echo '</td>';
                    echo '<td>';
                        echo 'Sale 1';
                    echo '</td>';
                echo '</tr>';
                echo '<tr >';
                    echo '<td colspan=2 align="middle" height=10>';
                     echo'<script type="text/javascript" src="http://cdn.dev.skype.com/uri/skype-uri.js"></script>
                        
<div id="SkypeButton_Chat_dkb.vietnam_1">
  <script type="text/javascript">
    Skype.ui({
      "name": "chat",
      "element": "SkypeButton_Chat_dkb.vietnam_1",
      "participants": ["dkb.vietnam"],
      "imageSize": 24
    });
  </script>
</div>';                  
                    echo '</td>';
                echo '</tr>';               
            echo '</table>';
            echo "<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>";
            echo '<iframe src="http://www.facebook.com/plugins/like.php?href=https://www.facebook.com/pages/Garmentviet/352675634860864?fref=ts&amp;width=450&amp;action=like&amp;font=tahoma&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:160px; height:px"></iframe>';
        }
        
        else {
            foreach($nameVN as $name)
            {
            ?>
            <div>
                    <?php echo $name?>
            </div>

            <?php
                    foreach($catalogs as $catalog)
                    {
                            if($name == $catalog->nameVN)
                                    echo CHtml::link($catalog->subNameVN, $this->createUrl('product/index', array('catalogID' => $catalog->id)))."<br />";
                    }
                    echo "<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>";
            }
            echo '<div>Hỗ trợ trực tuyến<br><br></div>';
            echo '<table width="100%">';
                echo '<tr align="middle">';
                    echo '<td>';
                        echo '<a href="ymsgr:sendim?DKB.vietnam1"><img src="http://opi.yahoo.com/online?u=forever_together23&m=g&t=1" alt="Send yahoo message title="Yahoo chat support" border=0></a>';
                    echo '</td>';
                    echo '<td>';
                        echo '<a href="ymsgr:sendim?DKB.vietnam2"><img src="http://opi.yahoo.com/online?u=forever_together23&m=g&t=1" alt="Send yahoo message title="Yahoo chat support" border=0></a>';
                    echo '</td>';
                echo '</tr>';
                echo '<tr align="middle">';
                    echo '<td>';
                        echo 'Sale 1';
                    echo '</td>';
                    echo '<td>';
                        echo 'Sale 1';
                    echo '</td>';
                echo '</tr>';
                echo '<tr >';
                    echo '<td colspan=2 align="middle" height=10>';
                        echo'<script type="text/javascript" src="http://cdn.dev.skype.com/uri/skype-uri.js"></script>
                       
<div id="SkypeButton_Chat_dkb.vietnam_1">
  <script type="text/javascript">
    Skype.ui({
      "name": "chat",
      "element": "SkypeButton_Chat_dkb.vietnam_1",
      "participants": ["dkb.vietnam"],
      "imageSize": 24
    });
  </script>
</div>';                        
                    echo '</td>';
                echo '</tr>';               
            echo '</table>';
            echo "<HR width ='100%' size ='0.5' color ='#ccc' NOSHADE>";
            echo '<iframe src="http://www.facebook.com/plugins/like.php?href=https://www.facebook.com/pages/Garmentviet/352675634860864?fref=ts&amp;width=450&amp;action=like&amp;font=tahoma&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:160px; height:px"></iframe>';       
        }
	?>
  
	
</div>