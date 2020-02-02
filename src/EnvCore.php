<?php
/**
 *文件描述
 */

namespace Zhufq\Laraenv;

class EnvCore
{
    /**
     * @param $data
     */
    public function edit($data)
    {

        $envPath = base_path() . DIRECTORY_SEPARATOR . '.env';

        $contentArray = collect( file( $envPath, FILE_IGNORE_NEW_LINES ) );
        $contentArray->transform( function ( $item ) use ( $data ) {

            foreach ( $data as $key => $value ) {

                if ( str_contains( $item, $key ) ) {
                    return $key . '=' . $value;
                }
            }
            return $item;
        } );
        $content = implode( $contentArray->toArray(), "\n" );

        \File::put( $envPath, $content );
    }
}
