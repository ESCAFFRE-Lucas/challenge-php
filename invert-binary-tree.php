<?php
function invertTree(?BinaryNode $binaryTree): BinaryNode|null
{
    if ($binaryTree == null) return null;
    $stock = $binaryTree->left;
    $stock2 = $binaryTree->right;
    $binaryTree->left = invertTree($stock2);
    $binaryTree->right = invertTree($stock);
    return $binaryTree;
}

