<?php

namespace App\Utility;

class Functionalities
	{
	
	public static function DivideTitleEbookTransformArray($stringEbook)
	{
		$stringEbook = str_replace('.pdf', '', $stringEbook); #Remove .pdf from the end of the title
        $SeparateTranformToArray = explode("-", $stringEbook); #transform string into array to separate title, category and creator.

        $ebookName = $SeparateTranformToArray[0];
        $ebookCategory = $SeparateTranformToArray[1];
        $ebookCategory = str_replace(",", " -", $ebookCategory); #Correcting separation errors
        $ebookCreator = $SeparateTranformToArray[2];

        #Limit to 44 Characters and add 3 Points.
        if(strlen($ebookName) >= 44){
            $ebookName = substr($ebookName, 0, 44);
            $ebookName = $ebookName . '...';
        }

        #Stores all data in an array
        $ebookData = array(
        	'ebookName' => $ebookName,
        	'ebookCategory' => $ebookCategory,
        	'ebookCreator' => $ebookCreator
    	);

        return $ebookData;
	}

    public static function ArrangeCategoryColumns($categories, $categoryName)
    {
        if(array_key_exists($categoryName, $categories)){

            $html = "<h5>$categoryName</h5>";
            $html .= '<div class="row">';
    
            $count = 0;

            foreach ($categories[$categoryName] as $category) {
                if ($count % 2 === 0) {
                    $html .= '</div><div class="row">';
                }

                $html .= '<div class="col-md-6">';
                $html .= "<p><input type='checkbox' name=''> $category</p>";
                $html .= '</div>';

                $count++;
            }

            $html .= '</div>';

        }else{
            $html = '<h5>Categoria fornecida não existe!</h5>
            <p>Error no arquivo sideBarFilter.php </p>';
        }
        return $html;
    }
    
}

?>