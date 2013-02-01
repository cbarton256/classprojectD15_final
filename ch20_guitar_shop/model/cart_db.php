<?php
function get_cart() {
    global $db;
    $query = 'SELECT * FROM cart
              ORDER BY cartID';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
}
function get_catNm($catID) {
	global $db;
	$query = 'SELECT categoryName FROM categories
	where categoryID = :catID';
	try {
		$statement = $db->prepare($query);
		$statement->bindValue(':catID', $catID);
		$statement->execute();
		$result = $statement->fetch();
		$statement->closeCursor();
		return $result;
	} catch (PDOException $e) {
		display_db_error($e->getMessage());
	}
}
function add_to_cart($meta,$catID,$prodID,$prodNm,$price) {
	global $db;
	$catNm = get_catNm( $catID );
	$query = 'INSERT INTO cart (metaFlg, categoryID, categoryName, productID, productName, pricePd)
	VALUES  (:meta, :catID, :catNm,  :prodID, :prodNm, :price)';
	try {
		$statement = $db->prepare($query);
		$statement->bindValue(':meta', $meta);
		$statement->bindValue(':catID', $catID);
		$statement->bindValue(':catNm', $catNm[0]);
		$statement->bindValue(':prodID', $prodID);
		$statement->bindValue(':prodNm', $prodNm);
		$statement->bindValue(':price', $price);
		$statement->execute();
		$statement->closeCursor();
	} catch (PDOException $e) {
		display_db_error($e->getMessage());
	}
}
?>
