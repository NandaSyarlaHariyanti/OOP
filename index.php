<?php 
    require_once('product.php');
    require_once('CDRack.php');
    require_once('CDMusic.php');

    echo " ------------------------------------ <br>" ;
    echo " Nama : Nanda Syarla Hariyanti  <br>" ;
    echo " Kelas : Pemrograman Web C  <br>" ;
    echo " NPM : 21081010168 <br>" ;
    echo " ------------------------------------ <br>" ;

    echo " ------------------------------------ <br>" ;
    echo "<h4>LIST PRODUCT TERSEDIA </h4>" ;

    $CD1 = new Product("MADE Series", 680000, 0.15);
    $CD2 = new Product("LALISA", 750000, 0.1);
    $CD3 = new Product("Kwon Ji Young", 590000, 0.2);
    $CD4 = new Product("Hot Sauce", 550000, 0.1);
    $CD5 = new Product("The First Step: Treasure Effect", 600000, 0.2);

    echo "Nama : " . $CD1->getName() . "<br>";
    echo "Harga : " . $CD1->getPrice() . "<br>";
    echo "Diskon : " . $CD1->getDiscount() . " (15 %) <br><br>";

    echo "Nama : " . $CD2->getName() . "<br>";
    echo "Harga : " . $CD2->getPrice() . "<br>";
    echo "Diskon : " . $CD2->getDiscount() . " (10 %) <br><br>";

    echo "Nama : " . $CD3->getName() . "<br>";
    echo "Harga : " . $CD3->getPrice() . "<br>";
    echo "Diskon : " . $CD3->getDiscount() . " (20 %) <br><br>";

    echo "Nama : " . $CD4->getName() . "<br>";
    echo "Harga : " . $CD4->getPrice() . "<br>";
    echo "Diskon : " . $CD4->getDiscount() . " (10 %) <br><br>";

    echo "Nama : " . $CD5->getName() . "<br>";
    echo "Harga : " . $CD5->getPrice() . "<br>";
    echo "Diskon : " . $CD5->getDiscount() . " (20 %) <br><br>";
    
    $RC1 = new Product("Acrilic", 350000, 0.2);
    $RC2 = new Product("Plastic", 100000, 0.15);
    $RC3 = new Product("Wood", 280000, 0.1);
    $RC4 = new Product("Iron", 420000, 0.3);
    $RC5 = new Product("Blockboard", 150000, 0.1);

    echo "Nama : " . $RC1->getName() . "<br>";
    echo "Harga : " . $RC1->getPrice() . "<br>";
    echo "Diskon : " . $RC1->getDiscount() . " (20 %) <br><br>";

    echo "Nama : " . $RC2->getName() . "<br>";
    echo "Harga : " . $RC2->getPrice() . "<br>";
    echo "Diskon : " . $RC2->getDiscount() . " (15 %) <br><br>";

    echo "Nama : " . $RC3->getName() . "<br>";
    echo "Harga : " . $RC3->getPrice() . "<br>";
    echo "Diskon : " . $RC3->getDiscount() . " (10 %) <br><br>";

    echo "Nama : " . $RC4->getName() . "<br>";
    echo "Harga : " . $RC4->getPrice() . "<br>";
    echo "Diskon : " . $RC4->getDiscount() . " (30 %) <br><br>";

    echo "Nama : " . $RC5->getName() . "<br>";
    echo "Harga : " . $RC5->getPrice() . "<br>";
    echo "Diskon : " . $RC5->getDiscount() . " (10 %) <br><br>";
    
    echo "<h4> LIST PRODUCT MUSIC</h4>" ;

    $MUSIC1 = new CDMusic($CD1->getName(), $CD1->getPrice(), $CD1->getDiscount(), "BIG BANG", "R&B / Soul" );
    $MUSIC2 = new CDMusic($CD2->getName(), $CD2->getPrice(), $CD2->getDiscount(), "Lisa Of Blackpink", "Hip Hop" );
    $MUSIC3 = new CDMusic($CD3->getName(), $CD3->getPrice(), $CD3->getDiscount(), "G-Dragon  Of Bigbang", "Hip Hop" );
    $MUSIC4 = new CDMusic($CD4->getName(), $CD4->getPrice(), $CD4->getDiscount(), "NCT Dream", "Korean Dance" );
    $MUSIC5 = new CDMusic($CD5->getName(), $CD5->getPrice(), $CD5->getDiscount(), "Treasure", "Korean Dance" );

    echo "Nama : " . $MUSIC1->getName() . "<br>";
    echo "Artis : " . $MUSIC1->getArtist() . "<br>";
    echo "Genre : " . $MUSIC1->getGenre() . "<br>";
    echo "Harga : " . $MUSIC1->getPrice() . "<br>";
    echo "Diskon : " . $MUSIC1->getDiscount() . " (20 %) " . "<br>";
    echo "Harga Diskon : " . $MUSIC1->FinalPrice() . "<br> <br>";

    echo "Nama : " . $MUSIC2->getName() . "<br>";
    echo "Artis : " . $MUSIC2->getArtist() . "<br>";
    echo "Genre : " . $MUSIC2->getGenre() . "<br>";
    echo "Harga : " . $MUSIC2->getPrice() . "<br>";
    echo "Diskon : " . $MUSIC2->getDiscount() . " (15 %) " . "<br>";
    echo "Harga Diskon : " . $MUSIC2->FinalPrice() . "<br> <br>";

    echo "Nama : " . $MUSIC3->getName() . "<br>";
    echo "Artis : " . $MUSIC3->getArtist() . "<br>";
    echo "Genre : " . $MUSIC3->getGenre() . "<br>";
    echo "Harga : " . $MUSIC3->getPrice() . "<br>";
    echo "Diskon : " . $MUSIC3->getDiscount() . " (25 %) " . "<br>";
    echo "Harga Diskon : " . $MUSIC3->FinalPrice() . "<br> <br>";

    echo "Nama : " . $MUSIC4->getName() . "<br>";
    echo "Artis : " . $MUSIC4->getArtist() . "<br>";
    echo "Genre : " . $MUSIC4->getGenre() . "<br>";
    echo "Harga : " . $MUSIC4->getPrice() . "<br>";
    echo "Diskon : " . $MUSIC4->getDiscount() . " (15 %) " . "<br>";
    echo "Harga Diskon : " . $MUSIC4->FinalPrice() . "<br> <br>";

    echo "Nama : " . $MUSIC5->getName() . "<br>";
    echo "Artis : " . $MUSIC5->getArtist() . "<br>";
    echo "Genre : " . $MUSIC5->getGenre() . "<br>";
    echo "Harga : " . $MUSIC5->getPrice() . "<br>";
    echo "Diskon : " . $MUSIC5->getDiscount() . " (25 %) " . "<br>";
    echo "Harga Diskon : " . $MUSIC5->FinalPrice() . "<br> <br>";

    echo "<h4> LIST PRODUCT RACK</h4>" ;

    $RACK1 = new CDRack($RC1->getName(), $RC1->getPrice(), $RC1->getDiscount(), "45", "Futuristik" );
    $RACK2 = new CDRack($RC2->getName(), $RC2->getPrice(), $RC2->getDiscount(), "100", "Minimalist" );
    $RACK3 = new CDRack($RC3->getName(), $RC3->getPrice(), $RC3->getDiscount(), "50", "Vintage" );
    $RACK4 = new CDRack($RC4->getName(), $RC4->getPrice(), $RC4->getDiscount(), "100", "Minimalist" );
    $RACK5 = new CDRack($RC5->getName(), $RC5->getPrice(), $RC5->getDiscount(), "100", "Minimalist" );

    echo "Nama : " . $RACK1->getName() . "<br>";
    echo "Model : " . $RACK1->getModel() . "<br>";
    echo "Kapasitas : " . $RACK1->getCapacity() . "<br>";
    echo "Harga : " . $RACK1->getPrice() . "<br>";
    echo "Diskon : " . $RACK1->getDiscount() . " (20 %) " . "<br>";
    echo "Harga Diskon : " . $RACK1->FinalPrice() . "<br> <br>";

    echo "Nama : " . $RACK2->getName() . "<br>";
    echo "Model : " . $RACK2->getModel() . "<br>";
    echo "Kapasitas : " . $RACK2->getCapacity() . "<br>";
    echo "Harga : " . $RACK2->getPrice() . "<br>";
    echo "Diskon : " . $RACK2->getDiscount() . " (20 %) " . "<br>";
    echo "Harga Diskon : " . $RACK2->FinalPrice() . "<br> <br>";

    echo "Nama : " . $RACK3->getName() . "<br>";
    echo "Model : " . $RACK3->getModel() . "<br>";
    echo "Kapasitas : " . $RACK3->getCapacity() . "<br>";
    echo "Harga : " . $RACK3->getPrice() . "<br>";
    echo "Diskon : " . $RACK3->getDiscount() . " (20 %) " . "<br>";
    echo "Harga Diskon : " . $RACK3->FinalPrice() . "<br> <br>";

    echo "Nama : " . $RACK4->getName() . "<br>";
    echo "Model : " . $RACK4->getModel() . "<br>";
    echo "Kapasitas : " . $RACK4->getCapacity() . "<br>";
    echo "Harga : " . $RACK4->getPrice() . "<br>";
    echo "Diskon : " . $RACK4->getDiscount() . " (20 %) " . "<br>";
    echo "Harga Diskon : " . $RACK4->FinalPrice() . "<br> <br>";

    echo "Nama : " . $RACK5->getName() . "<br>";
    echo "Model : " . $RACK5->getModel() . "<br>";
    echo "Kapasitas : " . $RACK5->getCapacity() . "<br>";
    echo "Harga : " . $RACK5->getPrice() . "<br>";
    echo "Diskon : " . $RACK5->getDiscount() . " (20 %) " . "<br>";
    echo "Harga Diskon : " . $RACK5->FinalPrice() . "<br> <br>";

?>
