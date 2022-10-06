<?php
function invertTree(?BinaryNode $binaryTree): BinaryNode|null
{
    if ($binaryTree == null) return null;
    $stock = $binaryTree->left;
    $stock2 = $binaryTree->right;
    $binaryTree->left = invertTree($stock);
    $binaryTree->right = invertTree($stock2);
    return $binaryTree;
}

