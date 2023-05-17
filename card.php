<?php
    function createCard(array $row){
        $icons = ['fa-vest', 'fa-ruler-combined', 'chart-holder.png', 'fa-book', 'notes.png', 'stationary.png', 'geometry-set.png', 'calculator.png', 'other.png'];
        $targetDate = $row['id'];

        $currentDate = new DateTime();

        if($row['id'] == null){
            $targetDate = $currentDate;
        }else{
            $targetDate = DateTime::createFromFormat('YmdHis', $targetDate);
        }
        $category = $row['category'];
        $interval = $currentDate->diff($targetDate);
        $daysPassed = $interval->days;
        $card = "<div class='solution_card'>
                    <div class='hover_color_bubble'></div>
                    <i class='fa fa-5x fa-solid {$icons[$category]}' style='color: #3b3939;'></i>
                    <div class='solu_title'>
                    <h3>{$row['title']}</h3>
                    </div>
                    <div class='solu_description'>
                    <p>
                        {$row['description']}
                    </p>
                    <table class='card-publish-data'>
                        <tr>
                        <td>By {$row['user_name']}</td>
                        <td class='day'>{$daysPassed} days ago</td>
                        </tr>
                    </table>
                    <button type='button' class='read_more_btn'><a href='listPage.php?id={$row['id']}'>Read More</a></button>
                    </div>
                </div>";
        echo $card;
    }

?>