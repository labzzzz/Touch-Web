<style type="text/css">
	.wpfc-exclude-item:hover{
		background-color: #E5E5E5;
	}
</style>
<div id="wpfc-modal-exclude" style="display:none;top: 10.5px; left: 226px; position: absolute; padding: 6px; height: auto; width: 560px; z-index: 10001;">
	<div style="height: 100%; width: 100%; background: none repeat scroll 0% 0% rgb(0, 0, 0); position: absolute; top: 0px; left: 0px; z-index: -1; opacity: 0.5; border-radius: 8px;">
	</div>
	<div style="z-index: 600; border-radius: 3px;">
		<div style="font-family:Verdana,Geneva,Arial,Helvetica,sans-serif;font-size:12px;background: none repeat scroll 0px 0px rgb(255, 161, 0); z-index: 1000; position: relative; padding: 2px; border-bottom: 1px solid rgb(194, 122, 0); height: 35px; border-radius: 3px 3px 0px 0px;">
			<table width="100%" height="100%">
				<tbody>
					<tr>
						<td valign="middle" style="vertical-align: middle; font-weight: bold; color: rgb(255, 255, 255); text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5); padding-left: 10px; font-size: 13px; cursor: move;">Exclude Page</td>
						<td width="20" align="center" style="vertical-align: middle;"></td>
						<td width="20" align="center" style="vertical-align: middle; font-family: Arial,Helvetica,sans-serif; color: rgb(170, 170, 170); cursor: default;">
							<div title="Close Window" class="close-wiz"></div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="window-content-wrapper" style="padding: 8px;">
			<div style="z-index: 1000; height: auto; position: relative; display: inline-block; width: 100%;" class="window-content">


				<div id="wpfc-wizard-exclude" class="wpfc-cdn-pages-container">
					<div wpfc-cdn-page="1" class="wiz-cont" style="padding:0 0;min-height:37px;">

						<table width="100%" cellspacing="0" cellpadding="0" border="0" height="100%" style="background-color:#FFFFFF;border:1px solid #ccc !important;border-radius:10px;">
							<tbody>
								<tr>
									<td valign="top" id="cond-list">
										<table width="100%" cellspacing="0" cellpadding="5" border="0" class="cond-line active-line">
											<tbody>
												<tr>
													<td width="100" height="35" class="" style="padding-left:10px;font-family: Verdana,Geneva,Arial,Helvetica,sans-serif;font-size: 12px;">If REQUEST_URI</td>
													<td class="" width="95">
														<select name="wpfc-exclude-rule-prefix">
															<option selected="" value=""></option>
															<option value="homepage">Home Page</option>
										    				<option value="startwith">Starts With</option>
										    				<option value="contain">Contains</option>
										    				<option value="exact">Is Equal To</option>
										    			</select>
										    		</td>
										    		<td width="300">
										    			<div class="wpfc-exclude-rule-line-middle">
										    				<input type="text" name="wpfc-exclude-rule-content" style="width:300px;">
										    			</div>
										    		</td>
										    	</tr>
										    </tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="window-buttons-wrapper" style="padding: 0px; display: inline-block; width: 100%; border-top: 1px solid rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(222, 222, 222); z-index: 999; position: relative; text-align: right; border-radius: 0px 0px 3px 3px;">
			<div style="padding: 12px; height: 23px;">
				<button class="wpfc-dialog-buttons buttons-blood" type="button" action="remove">
					<span>Remove Rule</span>
				</button>
				<button class="wpfc-dialog-buttons" type="button" action="back">
					<img align="left" class="icon-left" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAYFJREFUeNrEkzFLw0AUx1/SpE02C0UXF6EgLXQxxc3BSUWsm1N1qVBwkIyOrgoFwY+gW0E36SQ4OIhmMIN+ACelWi1terlcLr5rTTE2oNDBB/+85HL/X+7du0hBEMA4IcOYMTZACW9y+7eQ1DRI6Xo/K8lkGYcXsMSqeP/RbA5NAedwv1eIAr4HmsqMUjN8Jo7z9xKE2XNdc2tt2qCEgNPpAPO830sIzWgydzYLRqvFwO31xPBdzEcsTNUIgHO+jAZztzJv2HYbdD0BpcWsIbrMeQAiCymKBPULe3QFpNsdZOIDYz44LgfH49B1CBCXAvVYH5RKqcO50RX4fsOjNHN41DBLlSXDevXg6ezSiqtbkiRrBNC+OQF5MncK6SzUj8/Nme0Nw8XdV1S1KMnRvWbPD3hdHcDCo4zUAXEqD4n8elnOzPbbSK8Oiv7LY1yrYwE6Ki2UMCoroE3M+de1WuhBdVBvqHf0sTiAitK+QD8PmZhIUaK3BH08Avi3n+lTgAEAiza4dOMU/9wAAAAASUVORK5CYII="/>
					<span>Back</span>
				</button>
				<button class="wpfc-dialog-buttons" type="button" action="next">
					<span>Next</span>
					<img align="absmiddle" class="icon-right" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAYdJREFUeNrEUz9IAmEUf6dlpqAQUksNDQ1NQR/NEdSSU1uEW0OrW2tjo0OLQbQcBNFik1C0tGpgglI0SpCcmXZ/v7vvu953nZWnQeDQgx/vce+93/vzvZNc14VRJAQjysgEYz1j6bAKUuibL5lKeVqSpDyqW4dSmZomWIYBQtcPVvoJgqJ1OhCNxYRJBPxdyX8ewbFt0FXVq5ZJzxLbsrJIkvl1BHTmgXPy08k4B4ZErZYNO+l5cnpRywY7+SLA2cju9jJRVQdEjAgUmnMXFMWERoPB1voCObusZDFcQRT7CExNA8viQCn3kqnDQbds0AwT2l0d3jULujThxQ0dATsoHx1fDd1HcnONxGckuC7clPFVcuORSHHYDvY4Y32JLu4Al1nqRuPQlM+9ZGg/yUazjt6Nz2funTI6ByqHpxchsrpfEjZXHnKsVpCdl1qv4MAdhBEJxJSvQwwr0efqI5hvd6x8co/f5hCvCF1wBDsQNzGBmPR1sCUxn4kwELbrJ0r//jd+CDAARWTMh3/g7aIAAAAASUVORK5CYII="/>
				</button>
				<button class="wpfc-dialog-buttons" type="button" action="close">
					<span>Close</span>
				</button>
				<button class="wpfc-dialog-buttons buttons-green" type="button" action="finish">
					<span>Save</span>
				</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var WpFcExcludePages = {
		rules: [],
		init: function(rules){
			this.rules = rules;
			this.insert_existing_rules();
			this.click_event_for_add_button();
		},
		add_rule: function(number, e){
			this.add_line(number, e);
			this.add_item(number, e);
		},
		remove_rule: function(number){
			jQuery("div.wpfc-exclude-item[wpfc-exclude-item-number='" + number + "']").remove();
			jQuery("div.wpfc-exclude-rule-line[wpfc-exclude-rule-number='" + number + "']").remove();
			Wpfc_Dialog.remove();
		},
		add_item: function(number, e){
			var self = this;
			var item = jQuery(".wpfc-exclude-item").first().clone();

			item.attr("wpfc-exclude-item-number", number);
			item.attr("prefix", e.prefix);
			item.attr("content", e.content);

			item.find(".wpfc-exclude-item-prefix").text(self.get_text(e.prefix));
			item.find(".wpfc-exclude-item-content").text('"' + e.content + '"');

			if(e.prefix == "homepage"){
				item.find(".app").hide();
				item.find(".app.home").show();
			}

			item.click(function(){
				var clone_modal = jQuery("#wpfc-modal-exclude").clone();
				var clone_modal_id = "wpfc-modal-exclude-" + new Date().getTime();

				clone_modal.find("select").change(function(e){
					if(jQuery(this).val() == "homepage"){
						clone_modal.find("input").hide();
						clone_modal.find("input").attr("name", "wpfc-exclude-rule-content").val("home");
					}else{
						clone_modal.find("input").show();
						clone_modal.find("input").attr("name", "wpfc-exclude-rule-content").val("");
					}
				});

				if(e.prefix == "homepage"){
					clone_modal.find("input").attr("name", "wpfc-exclude-rule-content").hide();
				}

				clone_modal.attr("id", clone_modal_id);
				clone_modal.find("select").attr("name", "wpfc-exclude-rule-prefix").val(jQuery(this).attr("prefix"));
				clone_modal.find("input").attr("name", "wpfc-exclude-rule-content").val(jQuery(this).attr("content"));


				jQuery("#wpfc-modal-exclude").after(clone_modal);

				if(typeof e.editable == "undefined"){
					Wpfc_Dialog.dialog(clone_modal_id, {"close" : 
						function(){
							Wpfc_Dialog.remove();
						},
						"remove" : 
						function(){
							self.remove_rule(number);
						},
						"finish" :
						function(){
							var prefix = clone_modal.find("select").attr("name", "wpfc-exclude-rule-prefix").val();
							var content = clone_modal.find("input").attr("name", "wpfc-exclude-rule-content").val();

							jQuery("div.wpfc-exclude-item[wpfc-exclude-item-number='" + number + "']").attr("prefix", prefix);
							jQuery("div.wpfc-exclude-item[wpfc-exclude-item-number='" + number + "']").attr("content", content);
							jQuery("div.wpfc-exclude-item[wpfc-exclude-item-number='" + number + "']").find(".wpfc-exclude-item-prefix").text(self.get_text(prefix));
							jQuery("div.wpfc-exclude-item[wpfc-exclude-item-number='" + number + "']").find(".wpfc-exclude-item-content").text('"' + content + '"');

							jQuery("div.wpfc-exclude-rule-line[wpfc-exclude-rule-number='" + number + "']").find("select[name='wpfc-exclude-rule-prefix-" + number + "']").val(prefix);
							jQuery("div.wpfc-exclude-rule-line[wpfc-exclude-rule-number='" + number + "']").find("input[name='wpfc-exclude-rule-content-" + number + "']").val(content);

							if(prefix == "homepage"){
								jQuery("div.wpfc-exclude-item[wpfc-exclude-item-number='" + number + "']").find(".app").hide();
								jQuery("div.wpfc-exclude-item[wpfc-exclude-item-number='" + number + "']").find(".app.home").show();
							}else{
								jQuery("div.wpfc-exclude-item[wpfc-exclude-item-number='" + number + "']").find(".app").show();
								jQuery("div.wpfc-exclude-item[wpfc-exclude-item-number='" + number + "']").find(".app.home").hide();
							}

							Wpfc_Dialog.remove();
						}
					});
				}else if(e.editable == false){
					Wpfc_Dialog.dialog(clone_modal_id, {"close" : function(){Wpfc_Dialog.remove();}});
				}
			});
			
			item.show();

			jQuery(".wpfc-exclude-list").append(item);
		},
		add_line: function(number, e){
			var line = jQuery(".wpfc-exclude-rule-line").first().closest(".wpfc-exclude-rule-line").clone();
			
			line.attr("wpfc-exclude-rule-number", number);

			line.find(".wpfc-exclude-rule-line-add").remove();
			line.find(".wpfc-exclude-rule-line-delete").show();
			line.find("select").attr("name", "wpfc-exclude-rule-prefix-" + number).val(e.prefix);
			line.find("input").attr("name", "wpfc-exclude-rule-content-" + number).val(e.content);

			jQuery(".wpfc-exclude-rule-container").append(line);
		},
		click_event_for_add_button: function(){
			var self = this;

			jQuery(".wpfc-add-new-exclude-button").click(function(e){
				var clone_modal = jQuery("#wpfc-modal-exclude").clone();
				var number = jQuery("div.wpfc-exclude-rule-line[wpfc-exclude-rule-number]").length;
				var clone_modal_id = "wpfc-modal-exclude-" + new Date().getTime();

				clone_modal.attr("id", clone_modal_id);

				clone_modal.find("select").change(function(){
					if(jQuery(this).val() == "homepage"){
						clone_modal.find("input").hide();
						clone_modal.find("input").attr("name", "wpfc-exclude-rule-content").val("home");
					}else{
						clone_modal.find("input").show();
						clone_modal.find("input").attr("name", "wpfc-exclude-rule-content").val("");
					}
				});
				
				jQuery("#wpfc-modal-exclude").after(clone_modal);

				Wpfc_Dialog.dialog(clone_modal_id, {"finish" : 
					function(){
						var prefix = clone_modal.find("select").attr("name", "wpfc-exclude-rule-prefix").val();
						var content = clone_modal.find("input").attr("name", "wpfc-exclude-rule-content").val();

						self.add_rule(number + 1, {"prefix" : prefix, "content" : content});
						Wpfc_Dialog.remove();
					},
					"close" : 
					function(){
						Wpfc_Dialog.remove();
					}
				});
			});
		},
		insert_existing_rules: function(){
			var self = this;

			self.add_item(new Date().getTime(), {"prefix" : "exact", "content" : "wp-login.php", "editable" : false});
			self.add_item(new Date().getTime(), {"prefix" : "startwith", "content" : "wp-content", "editable" : false});
			self.add_item(new Date().getTime(), {"prefix" : "startwith", "content" : "wp-admin", "editable" : false});

			if(typeof this.rules != "undefined" && this.rules.length > 0){
				jQuery.each(self.rules, function(i, e){
					if(i > 0){
					}

					self.add_rule(i + 1, e);
				});
			}
		},
		get_text: function(value){
			var obj = {"exact" : "Is Equal To","startwith" : "Starts With","contain" : "Contains", "homepage" : "Home Page"};
			return obj[value];
		}
	};
</script>



