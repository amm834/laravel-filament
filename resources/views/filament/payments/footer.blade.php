<tr class="filament-tables-cell filament-table-cell-user.name">
    <td class="filament-tables-cell" colspan="5">Total</td>
    <td class="filament-tables-cell ">
        <div class="filament-tables-column-wrapper">
            <div class="flex w-full justify-start text-start">
                <div class="filament-tables-text-column px-4 py-3">
                    <div class="inline-flex items-center space-x-1 rtl:space-x-reverse">
                        <span class="">
           {{ money($this->getTableRecords()->sum('subtotal'),'MMK')  }}
        </span>
                    </div>
                </div>
            </div>
        </div>
    </td>
    <td class="filament-tables-cell ">
        <div class="filament-tables-column-wrapper">
            <div class="flex w-full justify-start text-start">
                <div class="filament-tables-text-column px-4 py-3">
                    <div class="inline-flex items-center space-x-1 rtl:space-x-reverse">
                        <span class="">
           {{ money($this->getTableRecords()->sum('taxes'),'MMK')  }}
        </span>
                    </div>
                </div>
            </div>
        </div>
    </td>
    <td class="filament-tables-cell ">
        <div class="filament-tables-column-wrapper">
            <div class="flex w-full justify-start text-start">
                <div class="filament-tables-text-column px-4 py-3">
                    <div class="inline-flex items-center space-x-1 rtl:space-x-reverse">
                        <span class="">
           {{ money($this->getTableRecords()->sum('total'),'MMK')  }}
        </span>
                    </div>
                </div>
            </div>
        </div>
    </td>
</tr>
