<?php
class noBug {
    public function invertTree (BinaryNode $binaryTree): BinaryNode {
        $stock = $binaryTree->left;
        $binaryTree->left = $binaryTree->right;
        $binaryTree->right = $stock;
        $binaryTree->invertTree($binaryTree->left);
        $binaryTree->invertTree($binaryTree->right);
        return $binaryTree;
    }
}

