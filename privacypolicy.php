<?php 
	ob_start();
	session_start();
	if($_SESSION['frontuserid']==""){
		header("location:login.php");
		exit();
	}
?>
<?php
	include("include/connection.php");
	$userid=$_SESSION['frontuserid'];
?>
<html lang="en" style="font-size: 102.8px;">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="icon" href="favicon.ico">
		<?php include 'head.php';?>
		<link href="assets/css/app.466ecb22.css" rel="preload" as="style">
		<link href="assets/css/chunk-vendors.cf06751b.css" rel="preload" as="style">
		<link href="assets/css/chunk-vendors.cf06751b.css" rel="stylesheet">
		<link href="assets/css/app.466ecb22.css" rel="stylesheet">
		<link href="assets/css/inc/ionicons.min.css" rel="stylesheet">
		<style type="text/css" id="operaUserStyle">
			video {
			  filter: url('data:image/svg+xml,\
				<svg xmlns="http://www.w3.org/2000/svg">\
				  <filter id="sharpen">\
					<feConvolveMatrix order="3" preserveAlpha="true" kernelMatrix="1 -1 1 -1 -1 -1 1 -1 1"/>\
				  </filter>\
				</svg>#sharpen');
			}
		</style>
		<style>
			body::-webkit-scrollbar {
			  display: none;
			}
			.appBottomMenu {
				min-height: 56px;
				position: fixed;
				z-index: 9999;
				bottom: 0;
				left: 0;
				right: 0;
				background: #FFF;
				display: -webkit-box;
				display: flex;
				-webkit-box-align: center;
				align-items: center;
				-webkit-box-pack: center;
				justify-content: center;
				padding-bottom: env(safe-area-inset-bottom);
				-webkit-box-shadow: 0 3px 14px 2px rgba(0, 0, 0, .12);
				box-shadow: 0 3px 14px 2px rgba(0, 0, 0, .12);
			}

			.appBottomMenu .item {
				width: 35%;
				text-align: center;
				height: 56px;
				display: -webkit-box;
				display: flex;
				-webkit-box-align: center;
				align-items: center;
				-webkit-box-pack: center;
				justify-content: center;
			}
			
			.appBottomMenu .item.active {
				position: relative;
			}

			.appBottomMenu .item>a {
				width: 100%;
				height: 56px;
				display: -webkit-box;
				display: flex;
				-webkit-box-align: center;
				align-items: center;
				padding: 0;
				-webkit-box-pack: center;
				justify-content: center;
				color: #868f8b !important;
				position: relative;
			}
			
			.appBottomMenu .item.active>a {
				color: #009688 !important;
			}
			
			.appBottomMenu .item p {
				margin: 0;
			}

			.appBottomMenu .item i {
				font-size: 26px;
				line-height: 0;
				margin-bottom: 17px;
				display: block;
			}

			.appBottomMenu .item span {
				display: block;
				font-size: 11px;
				position: absolute;
				left: 0;
				bottom: 7px;
				right: 0;
			}
		</style>
	</head>
	<body style="font-size: 12px;">
		<noscript><strong>We're sorry but default doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
		<div data-v-4af9315c="" class="privacypolicy">
			<nav data-v-4af9315c="" class="top_nav">
				<div data-v-4af9315c="" class="left">
					<img data-v-4af9315c="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAByUlEQVRoQ+3ZwSsFURTH8e
					/5N5SV/0AWtpbIggUlKSlJJCUpSUlJSlKSkpKUbEjK1tbCkhV/hT/gp1deXa95z8y8md4905v1vXfO5515M+feY1Tksoo46EJiy2Q3I60yImkHGAZ6gTszWys
					7g4VnRNI2sNsQ+JCZvZSJKRQiaQvYSwh43MweXEAkbQL7CcG+mdlAmYja2oVkRNIGcJAQ7DswaWYf0UMkrQOHnUS0nRFJtbfRUacRbUEkrQLHMSByQyStACex
					IHJBJC0BpzEhMkMkLQJnsSEyQSQtAOcxIlJDJM0DF7EiUkEkzQGXMSP+hUiaBa5iR7SESJoBrj0gmkIkTQM3XhCJEElTwG0TxHLZxV+a9ZP2Nn+qX0mjwFOax
					To85hvoN7PPehyNkEdgrMNBpr39s5mNVB5SjUerlqZK/Nnrz1slXr8Bxv8HMcD4L1ECjP+iMcD4L+MDjP+NVYDxv9UNMP4PHwKM/+OgAOP/gC7A+D8yDTD+D7
					EDjP+2QoDx3+gJMP5bbwEmqRk6aGavafewecYV0nprvPFve7pW0vQA92Y2kSe4LHNKgQTZ6TOzrywB5R1bKiRvUHnmdSF5frUy51QmIz+4oeozWPEp9QAAAAB
					JRU5ErkJggg==" alt="" onClick="goBack();">
					<span data-v-4af9315c="">Privacy Policy</span>
				</div>
			</nav>
			<div data-v-4af9315c="" class="content_agree">
				<div data-v-4af9315c="" class="contents">
					<p data-v-4af9315c="">This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of 
					Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
					<h1 data-v-4af9315c="">Interpretation and Definitions</h1>
					<h2 data-v-4af9315c="">Interpretation</h2>
					<p data-v-4af9315c="">The words of which the initial letter is capitalized have meanings defined under the following conditions.</p>
					<p data-v-4af9315c="">The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
					<h2 data-v-4af9315c="">Definitions</h2>
					<p data-v-4af9315c="">For the purposes of this Privacy Policy:</p>
					<ul data-v-4af9315c="">
						<li data-v-4af9315c="">
							<p data-v-4af9315c="">
								<strong data-v-4af9315c="">You</strong> means the individual accessing or using the Service, or the company, or other legal 
								entity on behalf of which such individual is accessing or using the Service, as applicable.
							</p>
						</li>
						<li data-v-4af9315c="">
							<p data-v-4af9315c="">
								<strong data-v-4af9315c="">Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers
								to Coem Shop.
							</p>
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">Affiliate</strong> means an entity that controls, is controlled by or is under common control with a 
							party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for 
							election of directors or other managing authority.
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">Account</strong> means a unique account created for You to access our Service or parts of our Service. 
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">Website</strong> refers to Coem Shop, accessible from https://coem.in
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">Service</strong> refers to the Website.
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">Country</strong> refers to: Uttar Pradesh, India
						</li>
						<li data-v-4af9315c="">
							<p data-v-4af9315c="">
								<strong data-v-4af9315c="">Service Provider</strong> means any natural or legal person who processes the data on behalf of 
								the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide 
								the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how 
								the Service is used.
							</p>
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">Third-party Social Media Service</strong> refers to any website or any social network website through 
							which a User can log in or create an account to use the Service.
						</li>
						<li data-v-4af9315c="">
							<p data-v-4af9315c="">
								<strong data-v-4af9315c="">Personal Data</strong> is any information that relates to an identified or identifiable individual.
							</p>
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">Cookies</strong> are small files that are placed on Your computer, mobile device or any other device 
							by a website, containing the details of Your browsing history on that website among its many uses.
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">Device</strong> means any device that can access the Service such as a computer, a cellphone or a 
							digital tablet.
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">Usage Data</strong> refers to data collected automatically, either generated by the use of the Service
							or from the Service infrastructure itself (for example, the duration of a page visit).
						</li>
					</ul>
					<h1 data-v-4af9315c="">Collecting and Using Your Personal Data</h1>
					<h2 data-v-4af9315c="">Types of Data Collected</h2>
					<h3 data-v-4af9315c="">Personal Data</h3>
					<p data-v-4af9315c="">While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be 
						used to contact or identify You. Personally identifiable information may include, but is not limited to:
					</p>
					<ul data-v-4af9315c="">
						<li data-v-4af9315c="">Email address</li>
						<li data-v-4af9315c="">First name and last name</li>
						<li data-v-4af9315c="">Phone number</li>
						<li data-v-4af9315c="">Address, State, Province, ZIP/Postal code, City</li>
						<li data-v-4af9315c="">Usage Data</li>
					</ul>
					<h3 data-v-4af9315c="">Usage Data</h3>
					<p data-v-4af9315c="">Usage Data is collected automatically when using the Service.</p>
					<p data-v-4af9315c="">Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, 
						browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device 
						identifiers and other diagnostic data.
					</p>
					<p data-v-4af9315c="">When You access the Service by or through a mobile device, We may collect certain information automatically, 
						including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, 
						Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.
					</p>
					<p data-v-4af9315c="">We may also collect information that Your browser sends whenever You visit our Service or when You access the 
						Service by or through a mobile device.
					</p>
					<h3 data-v-4af9315c="">Tracking Technologies and Cookies</h3>
					<p data-v-4af9315c="">We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. 
						Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service.
					</p>
					<p data-v-4af9315c="">You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do 
						not accept Cookies, You may not be able to use some parts of our Service.
					</p>
					<p data-v-4af9315c="">Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on your personal computer or mobile 
						device when You go offline, while Session Cookies are deleted as soon as You close your web browser.
					</p>
					<p data-v-4af9315c="">We use both session and persistent Cookies for the purposes set out below:</p>
					<ul data-v-4af9315c="">
						<li data-v-4af9315c="">
							<p data-v-4af9315c=""><strong data-v-4af9315c="">Necessary / Essential Cookies</strong></p>
							<p data-v-4af9315c="">Type: Session Cookies</p>
							<p data-v-4af9315c="">Administered by: Us</p>
							<p data-v-4af9315c="">Purpose: These Cookies are essential to provide You with services available through the Website and to 
								enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without 
								these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with 
								those services.
							</p>
						</li>
						<li data-v-4af9315c="">
							<p data-v-4af9315c=""><strong data-v-4af9315c="">Cookies Policy / Notice Acceptance Cookies</strong></p>
							<p data-v-4af9315c="">Type: Persistent Cookies</p>
							<p data-v-4af9315c="">Administered by: Us</p>
							<p data-v-4af9315c="">Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
						</li>
						<li data-v-4af9315c="">
							<p data-v-4af9315c=""><strong data-v-4af9315c="">Functionality Cookies</strong></p>
							<p data-v-4af9315c="">Type: Persistent Cookies</p>
							<p data-v-4af9315c="">Administered by: Us</p>
							<p data-v-4af9315c="">Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering 
								your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to 
								avoid You having to re-enter your preferences every time You use the Website.
							</p>
						</li>
					</ul>
					<p data-v-4af9315c="">For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy.</p>
					<h2 data-v-4af9315c="">Use of Your Personal Data</h2>
					<p data-v-4af9315c="">The Company may use Personal Data for the following purposes:</p>
					<ul data-v-4af9315c="">
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">To provide and maintain our Service</strong>
							, including to monitor the usage of our Service.
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">To manage Your Account:</strong>
							to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities 
							of the Service that are available to You as a registered user.
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">For the performance of a contract:</strong> the development, compliance and undertaking of the purchase
								contract for the products, items or services You have purchased or of any other contract with Us through the Service.
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms 
							of electronic communication, such as a mobile application's push notifications regarding updates or informative communications 
							related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable 
							for their implementation.
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">To provide You</strong> with news, special offers and general information about other goods, services 
							and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not 
							to receive such information. 
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">To manage Your requests:</strong> 
							To attend and manage Your requests to Us.
						</li>
					</ul>
					<p data-v-4af9315c="">We may share your personal information in the following situations:</p>
					<ul data-v-4af9315c="">
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">With Service Providers:</strong> We may share Your personal information with Service Providers to 
							monitor and analyze the use of our Service, to contact You. 
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">For Business transfers:</strong> We may share or transfer Your personal information in connection 
							with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of our business 
							to another company. 
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">With Affiliates:</strong> We may share Your information with Our affiliates, in which case
							we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any							
							other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.														
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">With Business partners:</strong> We may share Your information with Our business partners to
							offer You certain products, services or promotions.                
						</li>
						<li data-v-4af9315c="">
							<strong data-v-4af9315c="">With other users:</strong> when You share personal information or otherwise interact in the
							public areas with other users, such information may be viewed by all users and may be publicly distributed outside.
							If You interact with other users or register through a Third-Party Social Media Service, Your contacts on
							the Third-Party Social Media Service may see You name, profile, pictures and description of Your activity.
							Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.		                		                		                		                		                		                
						</li>
					</ul>
					<h2 data-v-4af9315c="">Retention of Your Personal Data</h2>
					<p data-v-4af9315c="">The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in
		              this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal
		              obligations (for example, if we are required to retain your data to comply with applicable laws), resolve
		              disputes, and enforce our legal agreements and policies.
					</p>
		            <p data-v-4af9315c="">The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally  
		              retained for a shorter period of time, except when this data is used to strengthen the security or to improve the
		              functionality of Our Service, or We are legally obligated to retain this data for longer time periods.
					</p>
		            <h2 data-v-4af9315c="">Transfer of Your Personal Data</h2>  
		            <p data-v-4af9315c="">Your information, including Personal Data, is processed at the Company's operating offices and in any  		              		              
		              other places where the parties involved in the processing are located. It means that this information may be		              
		              transferred to — and maintained on — computers located outside of Your state, province, country or other
		              governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.
		            </p>
					<p data-v-4af9315c="">Your consent to this Privacy Policy followed by Your submission of such information represents Your
		              agreement to that transfer.		              
		            </p>
					<p data-v-4af9315c="">The Company will take all steps reasonably necessary to ensure that Your data is treated securely and
		              in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an
		              organization or a country unless there are adequate controls in place including the security of Your data and other personal
		              information.
		            </p>
					<h2 data-v-4af9315c="">Disclosure of Your Personal Data</h2>
					<h3 data-v-4af9315c="">Business Transactions</h3>
					<p data-v-4af9315c="">If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be
		              transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.		              		             		              
					</p>
					<h3 data-v-4af9315c="">Law enforcement</h3>
					<p data-v-4af9315c="">Under certain circumstances, the Company may be required to disclose Your Personal Data if required to
		              do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).
		            </p>
					<h3 data-v-4af9315c="">Other legal requirements</h3>
					<p data-v-4af9315c="">The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:
		            </p>
					<ul data-v-4af9315c="">
						<li data-v-4af9315c="">Comply with a legal obligation</li>
						<li data-v-4af9315c="">Protect and defend the rights or property of the Company</li>
						<li data-v-4af9315c="">Prevent or investigate possible wrongdoing in connection with the Service</li>
						<li data-v-4af9315c="">Protect the personal safety of Users of the Service or the public</li>
						<li data-v-4af9315c="">Protect against legal liability</li>
					</ul>
					<h2 data-v-4af9315c="">Security of Your Personal Data</h2>
					<p data-v-4af9315c="">The security of Your Personal Data is important to Us, but remember that no method of transmission over
		              the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means
		              to protect Your Personal Data, We cannot guarantee its absolute security.		              
					</p>
					<h1 data-v-4af9315c="">Children's Privacy</h1>
					<p data-v-4af9315c="">Our Service does not address anyone under the age of 13. We do not knowingly collect personally
		              identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your		              
		              child has provided Us with Personal Data, please contact Us. If We become aware that We have collected		              
		              Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that		              
		              information from Our servers.
					</p>
					<p data-v-4af9315c="">If We need to rely on consent as a legal basis for processing Your information and Your country
		              requires consent from a parent, We may require Your parent's consent before We collect and use that information.		              		              
					</p>
					<h1 data-v-4af9315c="">Links to Other Websites</h1>
					<p data-v-4af9315c="">Our Service may contain links to other websites that are not operated by Us. If You click on a third
		              party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of
		              every site You visit.		              		              		              
					</p>
					<p data-v-4af9315c="">We have no control over and assume no responsibility for the content, privacy policies or practices of
		              any third party sites or services.	              		              
					</p>
					<h1 data-v-4af9315c="">Changes to this Privacy Policy</h1>
					<p data-v-4af9315c="">We may update our Privacy Policy from time to time. We will notify You of any changes by posting the
		              new Privacy Policy on this page.		              		              
					</p>
					<p data-v-4af9315c="">We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming
		              effective and update the "Last updated" date at the top of this Privacy Policy.		              
					</p>
					<p data-v-4af9315c="">You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy
		              Policy are effective when they are posted on this page.		              
					</p>
					<h1 data-v-4af9315c="">Contact Us</h1>
					<p data-v-4af9315c="">If you have any questions about this Privacy Policy, You can contact us:</p>
					<ul data-v-4af9315c="">
						<li data-v-4af9315c="">By visiting this page on our website: https://coem.in/#/suggestion</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include("include/footer.php");?>
		<script src="assets/js/lib/jquery-3.6.1.min.js"></script>
		<script src="assets/js/app.js"></script>
	</body>
</html>