Behaviour.register({			
	'#ComplexTableField_Popup_DetailForm_Type' : {
		initialise : function() {
			var limitDimensions = document.getElementById( 'LimitDimensions' );
			if( this.className == 'readonly' ) {
				var type = document.getElementsByName( 'Type' )[ 0 ];
				if( type.value == 'ImagesSoundsVideos' )
					limitDimensions.style.display = 'none';
			}
			else {
				var extensionTypeSelected = this.options[ this.selectedIndex ].value;
				switch( extensionTypeSelected ) {
					case 'ImagesSoundsVideos' :
						limitDimensions.style.display = 'none';
						break;
					default :
						limitDimensions.style.display = 'block';
				}
			}
		},
		onchange : function() {
			var extensionTypeSelected = this.options[ this.selectedIndex ].value;
			var limitDimensions = document.getElementById( 'LimitDimensions' );
			switch( extensionTypeSelected ) {
				case 'ImagesSoundsVideos' :
					limitDimensions.style.display = 'none';
					break;
				default :
					limitDimensions.style.display = 'block';
			}
		}
	}
});
