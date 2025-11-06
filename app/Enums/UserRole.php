<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'ADMIN';
    case MANAGER = 'MANAGER';
    case FINANCE = 'FINANCE';
    case USER = 'USER';

    public function can(string $permission): bool
    {
        return match($this) {
            self::ADMIN => true,
            self::MANAGER => in_array($permission, ['manage_users', 'manage_products']),
            self::FINANCE => in_array($permission, ['manage_products', 'refund_transaction']),
            self::USER => in_array($permission, ['create_transaction', 'view_own_transactions']),
        };
    }

    public function label(): string
    {
        return match($this) {
            self::ADMIN => 'Administrador',
            self::MANAGER => 'Gerente',
            self::FINANCE => 'Financeiro',
            self::USER => 'Usuário',
        };
    }
}
