<template>
		<div style="margin-top:50px;display:flex;padding-top:30px;">
			<div >
					<div class="f-t -pbs"><h2 style="color: white">Nouveau sur BOOBA ?</h2></div>
					<h3 style="color:white">Inscrivez-vous à nos communications pour recevoir nos meilleures offres!</h3>
			</div>
			<div style="margin-left:150px">
				
				<form method="post" id="nl-ft-f" action="/newsletter/subscription/default/" class="nl-form _ftr -ptm">
					<div >
						<div  class="field has-addons">
				          	<p class="control ">
				            	<input class="input is-expanded" type="email" name="email" placeholder="Entrez votre adresse e-mail" width="400px" value required />
				            </p>
				            <p class="control">
				            	<button name="gender" value="male" class="button is-info">Send Me!</button>
							</p>  
				        </div>	
					</div>
					<!-- <input name="csrfToken" value="4e64829e706b1f9f6724595e727c3c8c" type="hidden" /> -->
				</form>
			</div>
			
		</div>
</template>

<script >
	export default{
		name:'Head',
	};
</script>