<?php

/**
 * Registers Sidebar with genesis. Requires Genesis.
 */
class GenesisRegisterSidebar {
	private $page_slug;
	private $page_title;
	private $number;
	private $text_domain;

	public function __construct( string $page_slug, int $number, string $text_domain ) {
		$this->page_slug   = $page_slug;
		$this->page_title  = ucwords( str_replace( '-', ' ', $this->page_slug ) );
		$this->number      = $number;
		$this->text_domain = $text_domain;
	}

	public function register_sidebar() {
		genesis_register_sidebar( array(
			'id'          => $this->page_slug . '-' . $this->number,
			'name'        => __( $this->page_title . ' ' . $this->number, $this->text_domain ),
			'description' => __( 'This is the ' . $this->page_title . ' ' . $this->number . ' section.', $this->text_domain ),
		) );
	}

}