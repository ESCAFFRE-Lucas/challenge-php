<?php
function invertTree(BinaryNode $binaryTree): BinaryNode
{
    $stock = $binaryTree->left;
    $stock2 = $binaryTree->right;
    $binaryTree->left = $stock2;
    $binaryTree->right = $stock;
    $binaryTree->invertTree($binaryTree->left);
    $binaryTree->invertTree($binaryTree->right);
    return $binaryTree;
}

