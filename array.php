<?php
// Array and foreach loop
 
// $articles = [
//     "PHP Basic",
//     "Laravel Guide",
//     "Javascript Tips",
//     "HTML Fundamentals"
// ];


$articles = [
    [
        "title" => "PHP Basic",
    "content" => "Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to Letraset, a popular manufacturer of dry transfer sheets for text and other design elements.

It is believed that they scrambled parts of Cicero’s De Finibus Bonorum et Malorum in the 1960s for use in their Body Type (basically body paragraph placeholder) sheets. It usually begins with:

“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”

The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.

The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.",
    "author"=> "Jessie Lloveras",
    "datePublished" => "July 6, 2026",
    ],
    [ 
        "title" => "Javascript",
    "content" => "Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to Letraset, a popular manufacturer of dry transfer sheets for text and other design elements.

It is believed that they scrambled parts of Cicero’s De Finibus Bonorum et Malorum in the 1960s for use in their Body Type (basically body paragraph placeholder) sheets. It usually begins with:

“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”

The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.

The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.",
    "author"=> "Jessie Lloveras",
    "datePublished" => "July 6, 2026",
    ],
    [ 
        "title" => "CSS",
    "content" => "Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to Letraset, a popular manufacturer of dry transfer sheets for text and other design elements.

It is believed that they scrambled parts of Cicero’s De Finibus Bonorum et Malorum in the 1960s for use in their Body Type (basically body paragraph placeholder) sheets. It usually begins with:

“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”

The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.

The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.",
    "author"=> "Jessie Lloveras",
    "datePublished" => "July 6, 2026",
    ],
    [ 
        "title" => "React",
    "content" => "Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to Letraset, a popular manufacturer of dry transfer sheets for text and other design elements.

It is believed that they scrambled parts of Cicero’s De Finibus Bonorum et Malorum in the 1960s for use in their Body Type (basically body paragraph placeholder) sheets. It usually begins with:

“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”

The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.

The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.",
    "author"=> "Jessie Lloveras",
    "datePublished" => "July 6, 2026",
    ],
    [
        "title" => "Fontawesome",
    "content" => "Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to Letraset, a popular manufacturer of dry transfer sheets for text and other design elements.

It is believed that they scrambled parts of Cicero’s De Finibus Bonorum et Malorum in the 1960s for use in their Body Type (basically body paragraph placeholder) sheets. It usually begins with:

“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.”

The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.

The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum.",
    "author"=> "Jessie Lloveras",
    "datePublished" => "July 6, 2026",
    ],
];

// foreach ($articles as $article){
//     echo $article . "<br/>";
// }

// echo $articles ['title'];
// echo '<br/>';

// echo $articles['author'];
// echo '<br/>';

// echo $articles['datePublished'];
// echo '<br/>';

foreach ($articles as $article){
    echo "<h1>" . $article['title'] . "</h1>";
    echo "<p>" .$article['content'] . "</p>";
    echo "<strong>" .$article['author'] ."</strong> </br>";
    echo "<strong>" .$article['datePublished'] ."</strong>";
}
