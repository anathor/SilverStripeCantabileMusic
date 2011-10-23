Behaviour.register({			
	'#Form_EditForm_MediaPerPageLimit' : {
		initialise : function() {
			var input = document.getElementById( 'Form_EditForm_MediaPerPage' );
			if( input && ! this.checked )
				input.disabled = 'disabled';
		},
		onclick : function() {
			var input = document.getElementById( 'Form_EditForm_MediaPerPage' );
			if( input && this.checked )
				input.disabled = '';
			else if( input )
				input.disabled = 'disabled';
		}
	},
	'#Form_EditForm_ThumbnailType' : {
		initialise : function() {
			if( this.selectedIndex != null ) {
				var thumbnailTypeSelected = this.options[ this.selectedIndex ].value;
				var thumbnailWidth = document.getElementById( 'Form_EditForm_ThumbnailWidth' );
				var thumbnailHeight = document.getElementById( 'Form_EditForm_ThumbnailHeight' );
				switch( thumbnailTypeSelected ) {
					case 'ResizeByWidth' :
						thumbnailWidth.disabled = '';
						thumbnailHeight.disabled = 'disabled';
						break;
					case 'ResizeByHeight' :
						thumbnailWidth.disabled = 'disabled';
						thumbnailHeight.disabled = '';
						break;
					default :
						thumbnailWidth.disabled = '';
						thumbnailHeight.disabled = '';
				}
			}
		},
		onchange : function() {
			var thumbnailTypeSelected = this.options[ this.selectedIndex ].value;
			var thumbnailWidth = document.getElementById( 'Form_EditForm_ThumbnailWidth' );
			var thumbnailHeight = document.getElementById( 'Form_EditForm_ThumbnailHeight' );
			switch( thumbnailTypeSelected ) {
				case 'ResizeByWidth' :
					thumbnailWidth.disabled = '';
					thumbnailHeight.disabled = 'disabled';
					break;
				case 'ResizeByHeight' :
					thumbnailWidth.disabled = 'disabled';
					thumbnailHeight.disabled = '';
					break;
				default :
					thumbnailWidth.disabled = '';
					thumbnailHeight.disabled = '';
			}
		}
	},
	'#Form_EditForm_NormalType' : {
		initialise : function() {
			if( this.selectedIndex != null ) {
				var normalTypeSelected = this.options[ this.selectedIndex ].value;
				var normalWidth = document.getElementById( 'Form_EditForm_NormalWidth' );
				var normalHeight = document.getElementById( 'Form_EditForm_NormalHeight' );
				switch( normalTypeSelected ) {
					case 'OriginalResize' :
						normalWidth.disabled = 'disabled';
						normalHeight.disabled = 'disabled';
						break;
					case 'ResizeByWidth' :
						normalWidth.disabled = '';
						normalHeight.disabled = 'disabled';
						break;
					case 'ResizeByHeight' :
						normalWidth.disabled = 'disabled';
						normalHeight.disabled = '';
						break;
					default :
						normalWidth.disabled = '';
						normalHeight.disabled = '';
				}
			}
		},
		onchange : function() {
			var normalTypeSelected = this.options[ this.selectedIndex ].value;
			var normalWidth = document.getElementById( 'Form_EditForm_NormalWidth' );
			var normalHeight = document.getElementById( 'Form_EditForm_NormalHeight' );
			switch( normalTypeSelected ) {
				case 'OriginalResize' :
					normalWidth.disabled = 'disabled';
					normalHeight.disabled = 'disabled';
					break;
				case 'ResizeByWidth' :
					normalWidth.disabled = '';
					normalHeight.disabled = 'disabled';
					break;
				case 'ResizeByHeight' :
					normalWidth.disabled = 'disabled';
					normalHeight.disabled = '';
					break;
				default :
					normalWidth.disabled = '';
					normalHeight.disabled = '';
			}
		}
	}
});
