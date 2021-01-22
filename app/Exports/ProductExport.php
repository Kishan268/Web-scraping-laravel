<?php
namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class ProductExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    use Exportable;
	public $products;

	public function __construct($products){
		$this->products = $products;
	}
    
    public function collection()
    {
        $products = $this->products;
	    return collect($products);
    }
    public function headings(): array
	{
        return [
            'Category',
            'Brand',
            'Name',
            'Image Link',
            'Currency',
            'Unit Price',
            'Purchase Price',
        ];
	}
}