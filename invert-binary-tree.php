<?php
function invertTree(BinaryNode $binaryTree): BinaryNode
{
    $stock = $binaryTree->left;
    $stock2 = $binaryTree->right;
    $binaryTree->left = $stock2;
    $binaryTree->right = $stock;
    $binaryTree->left->value;
    $binaryTree->right->value;
    return $binaryTree;
}

