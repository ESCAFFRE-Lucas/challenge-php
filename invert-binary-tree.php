<?php
class BinaryNode
{
    public ?int $value = null; // Node value
    public ?BinaryNode $left = null; // Left child
    public ?BinaryNode $right = null; // Right child

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function invertTree (BinaryNode $binaryTree): BinaryNode {
        $stock = $this->left;
        $this->left = $this->right;
        $this->right = $stock;
        $this->invertTree($binaryTree->left);
        $this->invertTree($binaryTree->right);
        return $binaryTree;
    }
}
