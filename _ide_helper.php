<?php 

/**
 * Class Account
 *
 * @property Account parent_name 
 * @property Campaign campaign_name The first campaign name for Account (Meta-data only)
 * @property Link2 meetings 
 * @property Link2 calls 
 * @property Link2 emails 
 * @property Link2 bugs 
 * @property Link2 contacts 
 * @property Link2 notes 
 * @property Link2 cases 
 * @property Link2 email_addresses 
 * @property Link2 email_addresses_primary 
 * @property Link2 members 
 * @property Link2 member_of 
 * @property Link2 opportunities 
 * @property Link2 tasks 
 * @property Link2 documents 
 * @property Link2 created_by_link 
 * @property Link2 campaign_accounts 
 * @property Link2 leads 
 * @property Link2 project 
 * @property Link2 campaigns 
 * @property Link2 modified_user_link 
 * @property Link2 assigned_user_link 
 * @property Link2 prospect_lists 
 * @property User created_by_name 
 * @property User assigned_user_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User modified_by_name 
 * @property bool invalid_email 
 * @property bool email_opt_out 
 * @property bool deleted Record deletion indicator
 * @property string shipping_address_postalcode The zip code used for the shipping address
 * @property string shipping_address_country The country used for the shipping address
 * @property string email1 
 * @property string campaign_id Campaign that generated Account
 * @property string parent_id Account ID of the parent of this account
 * @property string email 
 * @property string sic_code SIC code of the account
 * @property string email_addresses_non_primary 
 * @property string shipping_address_street_2 
 * @property string phone_fax The fax phone number of this company
 * @property string annual_revenue Annual revenue for this company
 * @property string billing_address_street The street address used for billing address
 * @property string billing_address_street_2 
 * @property string billing_address_street_4 
 * @property string billing_address_street_3 
 * @property string industry The company belongs in this industry
 * @property string account_type The Company is of this type
 * @property string date_entered Date record created
 * @property string name Name of the Company
 * @property string date_modified Date record last modified
 * @property string modified_user_id User who last modified record
 * @property string description Full text of the note
 * @property string created_by User who created record
 * @property string billing_address_city The city used for billing address
 * @property string billing_address_state The state used for billing address
 * @property string shipping_address_street The street address used for for shipping purposes
 * @property string ticker_symbol The stock trading (ticker) symbol for the company
 * @property string id Unique identifier
 * @property string shipping_address_street_3 
 * @property string shipping_address_city The city used for the shipping address
 * @property string shipping_address_street_4 
 * @property string employees Number of employees, varchar to accomodate for both number (100) or range (50-100)
 * @property string ownership 
 * @property string billing_address_country The country used for the billing address
 * @property string billing_address_postalcode The postal code used for billing address
 * @property string rating An arbitrary rating for this company for use in comparisons with others
 * @property string phone_office The office phone number
 * @property string website URL of website for the company
 * @property string phone_alternate An alternate phone number
 * @property string shipping_address_state The state used for the shipping address
 *
 * @method Account getRelatedParent_name
 * @method Campaign getRelatedCampaign_name
 * @method Meeting[] getRelatedMeetings
 * @method Call[] getRelatedCalls
 * @method Email[] getRelatedEmails
 * @method Bug[] getRelatedBugs
 * @method Contact[] getRelatedContacts
 * @method Note[] getRelatedNotes
 * @method aCase[] getRelatedCases
 * @method Account[] getRelatedMembers
 * @method Account[] getRelatedMember_of
 * @method Opportunity[] getRelatedOpportunities
 * @method Task[] getRelatedTasks
 * @method User[] getRelatedCreated_by_link
 * @method Lead[] getRelatedLeads
 * @method Project[] getRelatedProject
 * @method CampaignLog[] getRelatedCampaigns
 * @method User[] getRelatedModified_user_link
 * @method User[] getRelatedAssigned_user_link
 * @method ProspectList[] getRelatedProspect_lists
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedModified_by_name
 *
 */
class Account {
	/** 
	 * @var Account 
	 */
	 public $parent_name;

	/** 
	 * @var Campaign The first campaign name for Account (Meta-data only)
	 */
	 public $campaign_name;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var Link2 
	 */
	 public $bugs;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $cases;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses_primary;

	/** 
	 * @var Link2 
	 */
	 public $members;

	/** 
	 * @var Link2 
	 */
	 public $member_of;

	/** 
	 * @var Link2 
	 */
	 public $opportunities;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $documents;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $campaign_accounts;

	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $project;

	/** 
	 * @var Link2 
	 */
	 public $campaigns;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $prospect_lists;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var bool 
	 */
	 public $invalid_email;

	/** 
	 * @var bool 
	 */
	 public $email_opt_out;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string The zip code used for the shipping address
	 */
	 public $shipping_address_postalcode;

	/** 
	 * @var string The country used for the shipping address
	 */
	 public $shipping_address_country;

	/** 
	 * @var string 
	 */
	 public $email1;

	/** 
	 * @var string Campaign that generated Account
	 */
	 public $campaign_id;

	/** 
	 * @var string Account ID of the parent of this account
	 */
	 public $parent_id;

	/** 
	 * @var string 
	 */
	 public $email;

	/** 
	 * @var string SIC code of the account
	 */
	 public $sic_code;

	/** 
	 * @var string 
	 */
	 public $email_addresses_non_primary;

	/** 
	 * @var string 
	 */
	 public $shipping_address_street_2;

	/** 
	 * @var string The fax phone number of this company
	 */
	 public $phone_fax;

	/** 
	 * @var string Annual revenue for this company
	 */
	 public $annual_revenue;

	/** 
	 * @var string The street address used for billing address
	 */
	 public $billing_address_street;

	/** 
	 * @var string 
	 */
	 public $billing_address_street_2;

	/** 
	 * @var string 
	 */
	 public $billing_address_street_4;

	/** 
	 * @var string 
	 */
	 public $billing_address_street_3;

	/** 
	 * @var string The company belongs in this industry
	 */
	 public $industry;

	/** 
	 * @var string The Company is of this type
	 */
	 public $account_type;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Name of the Company
	 */
	 public $name;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string The city used for billing address
	 */
	 public $billing_address_city;

	/** 
	 * @var string The state used for billing address
	 */
	 public $billing_address_state;

	/** 
	 * @var string The street address used for for shipping purposes
	 */
	 public $shipping_address_street;

	/** 
	 * @var string The stock trading (ticker) symbol for the company
	 */
	 public $ticker_symbol;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $shipping_address_street_3;

	/** 
	 * @var string The city used for the shipping address
	 */
	 public $shipping_address_city;

	/** 
	 * @var string 
	 */
	 public $shipping_address_street_4;

	/** 
	 * @var string Number of employees, varchar to accomodate for both number (100) or range (50-100)
	 */
	 public $employees;

	/** 
	 * @var string 
	 */
	 public $ownership;

	/** 
	 * @var string The country used for the billing address
	 */
	 public $billing_address_country;

	/** 
	 * @var string The postal code used for billing address
	 */
	 public $billing_address_postalcode;

	/** 
	 * @var string An arbitrary rating for this company for use in comparisons with others
	 */
	 public $rating;

	/** 
	 * @var string The office phone number
	 */
	 public $phone_office;

	/** 
	 * @var string URL of website for the company
	 */
	 public $website;

	/** 
	 * @var string An alternate phone number
	 */
	 public $phone_alternate;

	/** 
	 * @var string The state used for the shipping address
	 */
	 public $shipping_address_state;

	public $relationship_fields = [
		'parent_id' => 'member_of',
		'campaign_id' => 'campaign_accounts',
		'created_by' => 'created_by_link',
		'assigned_user_id' => 'assigned_user_link',
		'modified_user_id' => 'modified_user_link',
	];

}

/**
 * Class ACLAction
 *
 * @property Link2 roles 
 * @property bool deleted Record deletion indicator
 * @property string acltype Specifier for Category, usually "module"
 * @property string aclaccess Number specifying access priority; highest access "wins"
 * @property string category Category of the allowable action (usually the name of a module)
 * @property string name Name of the allowable action (view, list, delete, edit)
 * @property string date_entered Date record created
 * @property string date_modified Date record last modified
 * @property string modified_user_id User who last modified record
 * @property string created_by User ID who created record
 * @property string id Unique identifier
 *
 *
 */
class ACLAction {
	/** 
	 * @var Link2 
	 */
	 public $roles;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string Specifier for Category, usually "module"
	 */
	 public $acltype;

	/** 
	 * @var string Number specifying access priority; highest access "wins"
	 */
	 public $aclaccess;

	/** 
	 * @var string Category of the allowable action (usually the name of a module)
	 */
	 public $category;

	/** 
	 * @var string Name of the allowable action (view, list, delete, edit)
	 */
	 public $name;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string User ID who created record
	 */
	 public $created_by;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class ACLRole
 *
 * @property Link2 actions 
 * @property Link2 users 
 * @property bool deleted Record deletion indicator
 * @property string description The role description
 * @property string name The role name
 * @property string created_by User who created record
 * @property string date_entered Date record created
 * @property string date_modified Date record last modified
 * @property string modified_user_id User who last modified record
 * @property string id Unique identifier
 *
 *
 */
class ACLRole {
	/** 
	 * @var Link2 
	 */
	 public $actions;

	/** 
	 * @var Link2 
	 */
	 public $users;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string The role description
	 */
	 public $description;

	/** 
	 * @var string The role name
	 */
	 public $name;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class Administration
 *
 * @property string value The value given to the setting
 * @property string name The name given to the setting
 * @property string category Settings are grouped under this category; arbitraily defined based on requirements
 *
 *
 */
class Administration {
	/** 
	 * @var string The value given to the setting
	 */
	 public $value;

	/** 
	 * @var string The name given to the setting
	 */
	 public $name;

	/** 
	 * @var string Settings are grouped under this category; arbitraily defined based on requirements
	 */
	 public $category;

	public $relationship_fields = [
	];

}

/**
 * Class Bug
 *
 * @property Link2 emails 
 * @property Link2 documents 
 * @property Link2 assigned_user_link 
 * @property Link2 calls 
 * @property Link2 meetings 
 * @property Link2 tasks 
 * @property Link2 notes 
 * @property Link2 created_by_link 
 * @property Link2 modified_user_link 
 * @property Link2 fixed_in_release_link 
 * @property Link2 release_link 
 * @property Link2 cases 
 * @property Link2 project 
 * @property Link2 contacts 
 * @property Link2 accounts 
 * @property Release release_name 
 * @property Release fixed_in_release_name 
 * @property User modified_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User assigned_user_name 
 * @property User created_by_name 
 * @property bool deleted Record deletion indicator
 * @property string source An indicator of how the bug was entered (ex: via web, email, etc.)
 * @property string product_category Where the bug was discovered (ex: Accounts, Contacts, Leads)
 * @property string resolution An indication of how the issue was resolved
 * @property string created_by User who created record
 * @property string description Full text of the note
 * @property string modified_user_id User who last modified record
 * @property string date_modified Date record last modified
 * @property string name The short description of the bug
 * @property string date_entered Date record created
 * @property string bug_number Visual unique identifier
 * @property string type The type of issue (ex: issue, feature)
 * @property string work_log Free-form text used to denote activities of interest
 * @property string found_in_release The software or service release that manifested the bug
 * @property string id Unique identifier
 * @property string priority An indication of the priorty of the issue
 * @property string status The status of the issue
 * @property string fixed_in_release The software or service release that corrected the bug
 *
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method Release[] getRelatedFixed_in_release_link
 * @method Release[] getRelatedRelease_link
 * @method Release getRelatedRelease_name
 * @method Release getRelatedFixed_in_release_name
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedCreated_by_name
 *
 */
class Bug {
	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var Link2 
	 */
	 public $documents;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $fixed_in_release_link;

	/** 
	 * @var Link2 
	 */
	 public $release_link;

	/** 
	 * @var Link2 
	 */
	 public $cases;

	/** 
	 * @var Link2 
	 */
	 public $project;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Release 
	 */
	 public $release_name;

	/** 
	 * @var Release 
	 */
	 public $fixed_in_release_name;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string An indicator of how the bug was entered (ex: via web, email, etc.)
	 */
	 public $source;

	/** 
	 * @var string Where the bug was discovered (ex: Accounts, Contacts, Leads)
	 */
	 public $product_category;

	/** 
	 * @var string An indication of how the issue was resolved
	 */
	 public $resolution;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string The short description of the bug
	 */
	 public $name;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Visual unique identifier
	 */
	 public $bug_number;

	/** 
	 * @var string The type of issue (ex: issue, feature)
	 */
	 public $type;

	/** 
	 * @var string Free-form text used to denote activities of interest
	 */
	 public $work_log;

	/** 
	 * @var string The software or service release that manifested the bug
	 */
	 public $found_in_release;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string An indication of the priorty of the issue
	 */
	 public $priority;

	/** 
	 * @var string The status of the issue
	 */
	 public $status;

	/** 
	 * @var string The software or service release that corrected the bug
	 */
	 public $fixed_in_release;

	public $relationship_fields = [
		'found_in_release' => 'release_link',
		'fixed_in_release' => 'fixed_in_release_link',
		'modified_user_id' => 'modified_user_link',
		'assigned_user_id' => 'assigned_user_link',
		'created_by' => 'created_by_link',
	];

}

/**
 * Class Call
 *
 * @property Contact contact_name 
 * @property Link2 created_by_link 
 * @property Link2 modified_user_link 
 * @property Link2 opportunities 
 * @property Link2 leads 
 * @property Link2 assigned_user_link 
 * @property Link2 project 
 * @property Link2 accounts 
 * @property Link2 contacts 
 * @property Link2 users 
 * @property Link2 case 
 * @property Link2 notes 
 * @property User assigned_user_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User created_by_name 
 * @property User modified_by_name 
 * @property bool email_reminder_sent Whether email reminder is already sent
 * @property bool email_reminder_checked checkbox indicating whether or not the email reminder value is set (Meta-data only)
 * @property bool reminder_checked checkbox indicating whether or not the reminder value is set (Meta-data only)
 * @property bool deleted Record deletion indicator
 * @property string date_entered Date record created
 * @property string name Brief description of the call
 * @property string date_modified Date record last modified
 * @property string modified_user_id User who last modified record
 * @property string description Full text of the note
 * @property string created_by User who created record
 * @property string contact_id 
 * @property string repeat_type Type of recurrence
 * @property string repeat_parent_id Id of the first element of recurring records
 * @property string recurring_source Source of recurring call
 * @property string repeat_count Number of recurrence
 * @property string repeat_until Repeat until specified date
 * @property string repeat_dow Days of week in recurrence
 * @property string repeat_interval Interval of recurrence
 * @property string duration_hours Call duration, hours portion
 * @property string id Unique identifier
 * @property string reminder_time Specifies when a reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start
 * @property string parent_id The ID of the parent Sugar object identified by parent_type
 * @property string direction Indicates whether call is inbound or outbound
 * @property string parent_name 
 * @property string status The status of the call (Held, Not Held, etc.)
 * @property string date_end Date is which call is scheduled to (or did) end
 * @property string email_reminder_time Specifies when a email reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start
 * @property string accept_status 
 * @property string duration_minutes Call duration, minutes portion
 * @property string accept_status 
 * @property string outlook_id When the Sugar Plug-in for Microsoft Outlook syncs an Outlook appointment, this is the Outlook appointment item ID
 * @property string date_start Date in which call is schedule to (or did) start
 * @property string parent_type The Sugar object to which the call is related
 *
 * @method Contact getRelatedContact_name
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method User[] getRelatedAssigned_user_link
 * @method Account[] getRelatedAccounts
 * @method Note[] getRelatedNotes
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedCreated_by_name
 * @method User getRelatedModified_by_name
 *
 */
class Call {
	/** 
	 * @var Contact 
	 */
	 public $contact_name;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $opportunities;

	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $project;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $users;

	/** 
	 * @var Link2 
	 */
	 public $case;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var bool Whether email reminder is already sent
	 */
	 public $email_reminder_sent;

	/** 
	 * @var bool checkbox indicating whether or not the email reminder value is set (Meta-data only)
	 */
	 public $email_reminder_checked;

	/** 
	 * @var bool checkbox indicating whether or not the reminder value is set (Meta-data only)
	 */
	 public $reminder_checked;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Brief description of the call
	 */
	 public $name;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $contact_id;

	/** 
	 * @var string Type of recurrence
	 */
	 public $repeat_type;

	/** 
	 * @var string Id of the first element of recurring records
	 */
	 public $repeat_parent_id;

	/** 
	 * @var string Source of recurring call
	 */
	 public $recurring_source;

	/** 
	 * @var string Number of recurrence
	 */
	 public $repeat_count;

	/** 
	 * @var string Repeat until specified date
	 */
	 public $repeat_until;

	/** 
	 * @var string Days of week in recurrence
	 */
	 public $repeat_dow;

	/** 
	 * @var string Interval of recurrence
	 */
	 public $repeat_interval;

	/** 
	 * @var string Call duration, hours portion
	 */
	 public $duration_hours;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string Specifies when a reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start
	 */
	 public $reminder_time;

	/** 
	 * @var string The ID of the parent Sugar object identified by parent_type
	 */
	 public $parent_id;

	/** 
	 * @var string Indicates whether call is inbound or outbound
	 */
	 public $direction;

	/** 
	 * @var string 
	 */
	 public $parent_name;

	/** 
	 * @var string The status of the call (Held, Not Held, etc.)
	 */
	 public $status;

	/** 
	 * @var string Date is which call is scheduled to (or did) end
	 */
	 public $date_end;

	/** 
	 * @var string Specifies when a email reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start
	 */
	 public $email_reminder_time;

	/** 
	 * @var string 
	 */
	 public $accept_status;

	/** 
	 * @var string Call duration, minutes portion
	 */
	 public $duration_minutes;

	/** 
	 * @var string 
	 */
	 public $accept_status;

	/** 
	 * @var string When the Sugar Plug-in for Microsoft Outlook syncs an Outlook appointment, this is the Outlook appointment item ID
	 */
	 public $outlook_id;

	/** 
	 * @var string Date in which call is schedule to (or did) start
	 */
	 public $date_start;

	/** 
	 * @var string The Sugar object to which the call is related
	 */
	 public $parent_type;

	public $relationship_fields = [
		'contact_id' => 'contacts',
		'assigned_user_id' => 'assigned_user_link',
		'created_by' => 'created_by_link',
		'modified_user_id' => 'modified_user_link',
	];

}

/**
 * Class CampaignLog
 *
 * @property Campaign campaign_name1 
 * @property Link2 campaign 
 * @property Link2 created_lead 
 * @property Link2 created_contact 
 * @property Link2 sent_email 
 * @property Link2 created_opportunities 
 * @property Link2 targeted_user 
 * @property bool deleted Record deletion indicator
 * @property bool archived Indicates if item has been archived
 * @property string campaign_objective 
 * @property string campaign_content 
 * @property string campaign_name 
 * @property string more_information 
 * @property string marketing_id ID of marketing email this entry is associated with
 * @property string date_modified 
 * @property string related_name 
 * @property string recipient_email 
 * @property string target_type Descriptor of the target record type (e.g., Contact, Lead)
 * @property string activity_type The activity that occurred (e.g., Viewed Message, Bounced, Opted out)
 * @property string target_id Identifier of target record
 * @property string target_tracker_key Identifier of Tracker URL
 * @property string campaign_id Campaign identifier
 * @property string activity_date The date the activity occurred
 * @property string related_id 
 * @property string recipient_name 
 * @property string id Unique identifier
 * @property string list_id The target list from which item originated
 * @property string hits Number of times the item has been invoked (e.g., multiple click-thrus)
 * @property string related_type 
 * @property string marketing_name 
 *
 * @method Campaign getRelatedCampaign_name1
 *
 */
class CampaignLog {
	/** 
	 * @var Campaign 
	 */
	 public $campaign_name1;

	/** 
	 * @var Link2 
	 */
	 public $campaign;

	/** 
	 * @var Link2 
	 */
	 public $created_lead;

	/** 
	 * @var Link2 
	 */
	 public $created_contact;

	/** 
	 * @var Link2 
	 */
	 public $sent_email;

	/** 
	 * @var Link2 
	 */
	 public $created_opportunities;

	/** 
	 * @var Link2 
	 */
	 public $targeted_user;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool Indicates if item has been archived
	 */
	 public $archived;

	/** 
	 * @var string 
	 */
	 public $campaign_objective;

	/** 
	 * @var string 
	 */
	 public $campaign_content;

	/** 
	 * @var string 
	 */
	 public $campaign_name;

	/** 
	 * @var string 
	 */
	 public $more_information;

	/** 
	 * @var string ID of marketing email this entry is associated with
	 */
	 public $marketing_id;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $related_name;

	/** 
	 * @var string 
	 */
	 public $recipient_email;

	/** 
	 * @var string Descriptor of the target record type (e.g., Contact, Lead)
	 */
	 public $target_type;

	/** 
	 * @var string The activity that occurred (e.g., Viewed Message, Bounced, Opted out)
	 */
	 public $activity_type;

	/** 
	 * @var string Identifier of target record
	 */
	 public $target_id;

	/** 
	 * @var string Identifier of Tracker URL
	 */
	 public $target_tracker_key;

	/** 
	 * @var string Campaign identifier
	 */
	 public $campaign_id;

	/** 
	 * @var string The date the activity occurred
	 */
	 public $activity_date;

	/** 
	 * @var string 
	 */
	 public $related_id;

	/** 
	 * @var string 
	 */
	 public $recipient_name;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string The target list from which item originated
	 */
	 public $list_id;

	/** 
	 * @var string Number of times the item has been invoked (e.g., multiple click-thrus)
	 */
	 public $hits;

	/** 
	 * @var string 
	 */
	 public $related_type;

	/** 
	 * @var string 
	 */
	 public $marketing_name;

	public $relationship_fields = [
		'campaign_id' => 'campaign',
	];

}

/**
 * Class Campaign
 *
 * @property Link2 assigned_user_link 
 * @property Link2 created_by_link 
 * @property Link2 log_entries 
 * @property Link2 queueitems 
 * @property Link2 prospectlists 
 * @property Link2 emailmarketing 
 * @property Link2 tracked_urls 
 * @property Link2 modified_user_link 
 * @property Link2 opportunities 
 * @property ProspectLink contacts 
 * @property ProspectLink accounts 
 * @property ProspectLink leads 
 * @property User assigned_user_id User ID assigned to record
 * @property User modified_by_name 
 * @property User created_by_name 
 * @property User assigned_user_name 
 * @property bool deleted Record deletion indicator
 * @property string expected_revenue Expected revenue stemming from the campaign
 * @property string campaign_type The type of campaign
 * @property string actual_cost Actual cost of the campaign
 * @property string frequency Frequency of the campaign
 * @property string expected_cost Expected cost of the campaign
 * @property string content The campaign description
 * @property string objective The objective of the campaign
 * @property string end_date Ending date of the campaign
 * @property string created_by User who created record
 * @property string description inhertied but not used
 * @property string tracker_key The internal ID of the tracker used in a campaign; no longer used as of 4.2 (see campaign_trkrs)
 * @property string modified_user_id User who last modified record
 * @property string date_modified Date record last modified
 * @property string name The name of the campaign
 * @property string date_entered Date record created
 * @property string tracker_count The number of accesses made to the tracker URL; no longer used as of 4.2 (see campaign_trkrs)
 * @property string refer_url The URL referenced in the tracker URL; no longer used as of 4.2 (see campaign_trkrs)
 * @property string impressions Expected Click throughs manually entered by Campaign Manager
 * @property string currency_id Currency in use for the campaign
 * @property string status Status of the campaign
 * @property string id Unique identifier
 * @property string tracker_text The text that appears in the tracker URL; no longer used as of 4.2 (see campaign_trkrs)
 * @property string start_date Starting date of the campaign
 * @property string budget Budgeted amount for the campaign
 *
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedModified_by_name
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_name
 *
 */
class Campaign {
	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $log_entries;

	/** 
	 * @var Link2 
	 */
	 public $queueitems;

	/** 
	 * @var Link2 
	 */
	 public $prospectlists;

	/** 
	 * @var Link2 
	 */
	 public $emailmarketing;

	/** 
	 * @var Link2 
	 */
	 public $tracked_urls;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $opportunities;

	/** 
	 * @var ProspectLink 
	 */
	 public $contacts;

	/** 
	 * @var ProspectLink 
	 */
	 public $accounts;

	/** 
	 * @var ProspectLink 
	 */
	 public $leads;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string Expected revenue stemming from the campaign
	 */
	 public $expected_revenue;

	/** 
	 * @var string The type of campaign
	 */
	 public $campaign_type;

	/** 
	 * @var string Actual cost of the campaign
	 */
	 public $actual_cost;

	/** 
	 * @var string Frequency of the campaign
	 */
	 public $frequency;

	/** 
	 * @var string Expected cost of the campaign
	 */
	 public $expected_cost;

	/** 
	 * @var string The campaign description
	 */
	 public $content;

	/** 
	 * @var string The objective of the campaign
	 */
	 public $objective;

	/** 
	 * @var string Ending date of the campaign
	 */
	 public $end_date;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string inhertied but not used
	 */
	 public $description;

	/** 
	 * @var string The internal ID of the tracker used in a campaign; no longer used as of 4.2 (see campaign_trkrs)
	 */
	 public $tracker_key;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string The name of the campaign
	 */
	 public $name;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string The number of accesses made to the tracker URL; no longer used as of 4.2 (see campaign_trkrs)
	 */
	 public $tracker_count;

	/** 
	 * @var string The URL referenced in the tracker URL; no longer used as of 4.2 (see campaign_trkrs)
	 */
	 public $refer_url;

	/** 
	 * @var string Expected Click throughs manually entered by Campaign Manager
	 */
	 public $impressions;

	/** 
	 * @var string Currency in use for the campaign
	 */
	 public $currency_id;

	/** 
	 * @var string Status of the campaign
	 */
	 public $status;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string The text that appears in the tracker URL; no longer used as of 4.2 (see campaign_trkrs)
	 */
	 public $tracker_text;

	/** 
	 * @var string Starting date of the campaign
	 */
	 public $start_date;

	/** 
	 * @var string Budgeted amount for the campaign
	 */
	 public $budget;

	public $relationship_fields = [
		'modified_user_id' => 'modified_user_link',
		'created_by' => 'created_by_link',
		'assigned_user_id' => 'assigned_user_link',
	];

}

/**
 * Class CampaignTracker
 *
 * @property Link2 campaign 
 * @property bool is_optout Indicator whether tracker URL represents an opt-out link
 * @property bool deleted Record deletion indicator
 * @property string modified_user_id User who last modified record
 * @property string created_by User ID who created record
 * @property string date_modified Date record last modified
 * @property string date_entered Date record created
 * @property string tracker_name The name of the campaign tracker
 * @property string tracker_url The URL that represents the landing page when the tracker URL in the campaign email is clicked
 * @property string tracker_key Internal key to uniquely identifier the tracker URL
 * @property string campaign_id The ID of the campaign
 * @property string id Unique identifier
 *
 *
 */
class CampaignTracker {
	/** 
	 * @var Link2 
	 */
	 public $campaign;

	/** 
	 * @var bool Indicator whether tracker URL represents an opt-out link
	 */
	 public $is_optout;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string User ID who created record
	 */
	 public $created_by;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string The name of the campaign tracker
	 */
	 public $tracker_name;

	/** 
	 * @var string The URL that represents the landing page when the tracker URL in the campaign email is clicked
	 */
	 public $tracker_url;

	/** 
	 * @var string Internal key to uniquely identifier the tracker URL
	 */
	 public $tracker_key;

	/** 
	 * @var string The ID of the campaign
	 */
	 public $campaign_id;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class Case
 *
 * @property Account account_name The name of the account represented by the account_id field
 * @property Account account_id The account to which the case is associated
 * @property Link2 documents 
 * @property Link2 assigned_user_link 
 * @property Link2 emails 
 * @property Link2 notes 
 * @property Link2 tasks 
 * @property Link2 modified_user_link 
 * @property Link2 meetings 
 * @property Link2 created_by_link 
 * @property Link2 bugs 
 * @property Link2 calls 
 * @property Link2 kbdocuments 
 * @property Link2 contacts 
 * @property Link2 project 
 * @property Link2 accounts 
 * @property User modified_by_name 
 * @property User created_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User assigned_user_name 
 * @property bool deleted Record deletion indicator
 * @property string account_name1 
 * @property string status The status of the case
 * @property string modified_user_id User who last modified record
 * @property string created_by User who created record
 * @property string date_modified Date record last modified
 * @property string date_entered Date record created
 * @property string name The short description of the bug
 * @property string description Full text of the note
 * @property string case_number Visual unique identifier
 * @property string resolution The resolution of the case
 * @property string priority The priority of the case
 * @property string id Unique identifier
 * @property string type The type of issue (ex: issue, feature)
 * @property string work_log Free-form text used to denote activities of interest
 *
 * @method Account getRelatedAccount_name
 * @method Account getRelatedAccount_id
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedModified_user_link
 * @method User[] getRelatedCreated_by_link
 * @method Array[] getRelatedAccounts
 * @method User getRelatedModified_by_name
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedAssigned_user_name
 *
 */
class Case {
	/** 
	 * @var Account The name of the account represented by the account_id field
	 */
	 public $account_name;

	/** 
	 * @var Account The account to which the case is associated
	 */
	 public $account_id;

	/** 
	 * @var Link2 
	 */
	 public $documents;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $bugs;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $kbdocuments;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $project;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $account_name1;

	/** 
	 * @var string The status of the case
	 */
	 public $status;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string The short description of the bug
	 */
	 public $name;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string Visual unique identifier
	 */
	 public $case_number;

	/** 
	 * @var string The resolution of the case
	 */
	 public $resolution;

	/** 
	 * @var string The priority of the case
	 */
	 public $priority;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string The type of issue (ex: issue, feature)
	 */
	 public $type;

	/** 
	 * @var string Free-form text used to denote activities of interest
	 */
	 public $work_log;

	public $relationship_fields = [
		'account_id' => 'accounts',
		'modified_user_id' => 'modified_user_link',
		'created_by' => 'created_by_link',
		'assigned_user_id' => 'assigned_user_link',
	];

}

/**
 * Class Contact
 *
 * @property  c_accept_status_fields 
 * @property  opportunity_role_fields 
 * @property  m_accept_status_fields 
 * @property Account account_id 
 * @property Account account_name 
 * @property Campaign campaign_name The first campaign name for Contact (Meta-data only)
 * @property Contact report_to_name 
 * @property Link2 documents 
 * @property Link2 emails 
 * @property Link2 leads 
 * @property Link2 project_resource 
 * @property Link2 notes 
 * @property Link2 direct_reports 
 * @property Link2 meetings 
 * @property Link2 opportunities 
 * @property Link2 accounts 
 * @property Link2 email_addresses_primary 
 * @property Link2 email_addresses 
 * @property Link2 reports_to_link 
 * @property Link2 tasks 
 * @property Link2 calls 
 * @property Link2 bugs 
 * @property Link2 cases 
 * @property Link2 project 
 * @property Link2 assigned_user_link 
 * @property Link2 campaign_contacts 
 * @property Link2 tasks_parent 
 * @property Link2 created_by_link 
 * @property Link2 prospect_lists 
 * @property Link2 campaigns 
 * @property Link2 modified_user_link 
 * @property Link2 notes_parent 
 * @property Link2 user_sync 
 * @property User modified_by_name 
 * @property User created_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User assigned_user_name 
 * @property bool email_opt_out 
 * @property bool sync_contact Synch to outlook?  (Meta-Data only)
 * @property bool do_not_call An indicator of whether contact can be called
 * @property bool deleted Record deletion indicator
 * @property bool invalid_email 
 * @property string accept_status_name 
 * @property string lead_source How did the contact come about
 * @property string accept_status_id 
 * @property string email_and_name1 
 * @property string birthdate The birthdate of the contact
 * @property string campaign_id Campaign that generated lead
 * @property string reports_to_id The contact this contact reports to
 * @property string opportunity_role 
 * @property string opportunity_role_id 
 * @property string alt_address_postalcode Postal code for alternate address
 * @property string department The department of the contact
 * @property string title The title of the contact
 * @property string full_name 
 * @property string phone_home Home phone number of the contact
 * @property string email 
 * @property string phone_other Other phone number for the contact
 * @property string phone_work Work phone number of the contact
 * @property string phone_mobile Mobile phone number of the contact
 * @property string last_name Last name of the contact
 * @property string first_name First name of the contact
 * @property string date_modified Date record last modified
 * @property string date_entered Date record created
 * @property string name 
 * @property string modified_user_id User who last modified record
 * @property string created_by User who created record
 * @property string salutation Contact salutation (e.g., Mr, Ms)
 * @property string description Full text of the note
 * @property string phone_fax Contact fax number
 * @property string email1 
 * @property string alt_address_city City for alternate address
 * @property string alt_address_street_3 
 * @property string alt_address_street_2 
 * @property string alt_address_state State for alternate address
 * @property string id Unique identifier
 * @property string assistant_phone Phone number of the assistant of the contact
 * @property string assistant Name of the assistant of the contact
 * @property string alt_address_country Country for alternate address
 * @property string alt_address_street Street address for alternate address
 * @property string primary_address_country Country for primary address
 * @property string primary_address_street_2 
 * @property string primary_address_street Street address for primary address
 * @property string email2 
 * @property string primary_address_street_3 
 * @property string primary_address_city City for primary address
 * @property string primary_address_postalcode Postal code for primary address
 * @property string primary_address_state State for primary address
 * @property string email_addresses_non_primary 
 *
 * @method  getRelatedC_accept_status_fields
 * @method  getRelatedOpportunity_role_fields
 * @method  getRelatedM_accept_status_fields
 * @method Account getRelatedAccount_id
 * @method Account getRelatedAccount_name
 * @method Campaign getRelatedCampaign_name
 * @method Contact getRelatedReport_to_name
 * @method Opportunity[] getRelatedOpportunities
 * @method Array[] getRelatedReports_to_link
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedCreated_by_link
 * @method ProspectList[] getRelatedProspect_lists
 * @method CampaignLog[] getRelatedCampaigns
 * @method User[] getRelatedModified_user_link
 * @method User getRelatedModified_by_name
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedAssigned_user_name
 *
 */
class Contact {
	/** 
	 * @var  
	 */
	 public $c_accept_status_fields;

	/** 
	 * @var  
	 */
	 public $opportunity_role_fields;

	/** 
	 * @var  
	 */
	 public $m_accept_status_fields;

	/** 
	 * @var Account 
	 */
	 public $account_id;

	/** 
	 * @var Account 
	 */
	 public $account_name;

	/** 
	 * @var Campaign The first campaign name for Contact (Meta-data only)
	 */
	 public $campaign_name;

	/** 
	 * @var Contact 
	 */
	 public $report_to_name;

	/** 
	 * @var Link2 
	 */
	 public $documents;

	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $project_resource;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $direct_reports;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $opportunities;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses_primary;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses;

	/** 
	 * @var Link2 
	 */
	 public $reports_to_link;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $bugs;

	/** 
	 * @var Link2 
	 */
	 public $cases;

	/** 
	 * @var Link2 
	 */
	 public $project;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $campaign_contacts;

	/** 
	 * @var Link2 
	 */
	 public $tasks_parent;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $prospect_lists;

	/** 
	 * @var Link2 
	 */
	 public $campaigns;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $notes_parent;

	/** 
	 * @var Link2 
	 */
	 public $user_sync;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var bool 
	 */
	 public $email_opt_out;

	/** 
	 * @var bool Synch to outlook?  (Meta-Data only)
	 */
	 public $sync_contact;

	/** 
	 * @var bool An indicator of whether contact can be called
	 */
	 public $do_not_call;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool 
	 */
	 public $invalid_email;

	/** 
	 * @var string 
	 */
	 public $accept_status_name;

	/** 
	 * @var string How did the contact come about
	 */
	 public $lead_source;

	/** 
	 * @var string 
	 */
	 public $accept_status_id;

	/** 
	 * @var string 
	 */
	 public $email_and_name1;

	/** 
	 * @var string The birthdate of the contact
	 */
	 public $birthdate;

	/** 
	 * @var string Campaign that generated lead
	 */
	 public $campaign_id;

	/** 
	 * @var string The contact this contact reports to
	 */
	 public $reports_to_id;

	/** 
	 * @var string 
	 */
	 public $opportunity_role;

	/** 
	 * @var string 
	 */
	 public $opportunity_role_id;

	/** 
	 * @var string Postal code for alternate address
	 */
	 public $alt_address_postalcode;

	/** 
	 * @var string The department of the contact
	 */
	 public $department;

	/** 
	 * @var string The title of the contact
	 */
	 public $title;

	/** 
	 * @var string 
	 */
	 public $full_name;

	/** 
	 * @var string Home phone number of the contact
	 */
	 public $phone_home;

	/** 
	 * @var string 
	 */
	 public $email;

	/** 
	 * @var string Other phone number for the contact
	 */
	 public $phone_other;

	/** 
	 * @var string Work phone number of the contact
	 */
	 public $phone_work;

	/** 
	 * @var string Mobile phone number of the contact
	 */
	 public $phone_mobile;

	/** 
	 * @var string Last name of the contact
	 */
	 public $last_name;

	/** 
	 * @var string First name of the contact
	 */
	 public $first_name;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Contact salutation (e.g., Mr, Ms)
	 */
	 public $salutation;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string Contact fax number
	 */
	 public $phone_fax;

	/** 
	 * @var string 
	 */
	 public $email1;

	/** 
	 * @var string City for alternate address
	 */
	 public $alt_address_city;

	/** 
	 * @var string 
	 */
	 public $alt_address_street_3;

	/** 
	 * @var string 
	 */
	 public $alt_address_street_2;

	/** 
	 * @var string State for alternate address
	 */
	 public $alt_address_state;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string Phone number of the assistant of the contact
	 */
	 public $assistant_phone;

	/** 
	 * @var string Name of the assistant of the contact
	 */
	 public $assistant;

	/** 
	 * @var string Country for alternate address
	 */
	 public $alt_address_country;

	/** 
	 * @var string Street address for alternate address
	 */
	 public $alt_address_street;

	/** 
	 * @var string Country for primary address
	 */
	 public $primary_address_country;

	/** 
	 * @var string 
	 */
	 public $primary_address_street_2;

	/** 
	 * @var string Street address for primary address
	 */
	 public $primary_address_street;

	/** 
	 * @var string 
	 */
	 public $email2;

	/** 
	 * @var string 
	 */
	 public $primary_address_street_3;

	/** 
	 * @var string City for primary address
	 */
	 public $primary_address_city;

	/** 
	 * @var string Postal code for primary address
	 */
	 public $primary_address_postalcode;

	/** 
	 * @var string State for primary address
	 */
	 public $primary_address_state;

	/** 
	 * @var string 
	 */
	 public $email_addresses_non_primary;

	public $relationship_fields = [
		'account_id' => 'accounts',
		'campaign_id' => 'campaign_contacts',
		'reports_to_id' => 'reports_to_link',
		'modified_user_id' => 'modified_user_link',
		'created_by' => 'created_by_link',
		'assigned_user_id' => 'assigned_user_link',
	];

}

/**
 * Class Currency
 *
 * @property bool deleted Record deletion indicator
 * @property string date_entered Date record created
 * @property string date_modified Date record last modified
 * @property string created_by User ID who created record
 * @property string status Currency status
 * @property string conversion_rate Conversion rate factor (relative to stored value)
 * @property string name Name of the currency
 * @property string symbol Symbol representing the currency
 * @property string iso4217 3-letter identifier specified by ISO 4217 (ex: USD)
 * @property string id Unique identifer
 *
 *
 */
class Currency {
	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string User ID who created record
	 */
	 public $created_by;

	/** 
	 * @var string Currency status
	 */
	 public $status;

	/** 
	 * @var string Conversion rate factor (relative to stored value)
	 */
	 public $conversion_rate;

	/** 
	 * @var string Name of the currency
	 */
	 public $name;

	/** 
	 * @var string Symbol representing the currency
	 */
	 public $symbol;

	/** 
	 * @var string 3-letter identifier specified by ISO 4217 (ex: USD)
	 */
	 public $iso4217;

	/** 
	 * @var string Unique identifer
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class DocumentRevision
 *
 * @property Link2 documents 
 * @property Link2 created_by_link 
 * @property User created_by_name 
 * @property bool deleted 
 * @property string revision 
 * @property string date_modified 
 * @property string latest_revision 
 * @property string file_mime_type 
 * @property string document_name 
 * @property string latest_revision_id 
 * @property string file_ext 
 * @property string doc_id Document ID from documents web server provider
 * @property string document_id 
 * @property string change_log 
 * @property string doc_type Document type (ex: Google, box.net, IBM SmartCloud)
 * @property string doc_url Document URL from documents web server provider
 * @property string filename 
 * @property string created_by 
 * @property string date_entered 
 * @property string id 
 *
 * @method User[] getRelatedCreated_by_link
 * @method User getRelatedCreated_by_name
 *
 */
class DocumentRevision {
	/** 
	 * @var Link2 
	 */
	 public $documents;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $revision;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $latest_revision;

	/** 
	 * @var string 
	 */
	 public $file_mime_type;

	/** 
	 * @var string 
	 */
	 public $document_name;

	/** 
	 * @var string 
	 */
	 public $latest_revision_id;

	/** 
	 * @var string 
	 */
	 public $file_ext;

	/** 
	 * @var string Document ID from documents web server provider
	 */
	 public $doc_id;

	/** 
	 * @var string 
	 */
	 public $document_id;

	/** 
	 * @var string 
	 */
	 public $change_log;

	/** 
	 * @var string Document type (ex: Google, box.net, IBM SmartCloud)
	 */
	 public $doc_type;

	/** 
	 * @var string Document URL from documents web server provider
	 */
	 public $doc_url;

	/** 
	 * @var string 
	 */
	 public $filename;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $id;

	public $relationship_fields = [
		'created_by' => 'created_by_link',
	];

}

/**
 * Class Document
 *
 * @property Document related_doc_name The related document name for Meta-Data framework
 * @property Link2 created_by_link 
 * @property Link2 modified_user_link 
 * @property Link2 cases 
 * @property Link2 bugs 
 * @property Link2 assigned_user_link 
 * @property Link2 opportunities 
 * @property Link2 leads 
 * @property Link2 contracts 
 * @property Link2 accounts 
 * @property Link2 revisions 
 * @property Link2 contacts 
 * @property User modified_by_name 
 * @property User assigned_user_name 
 * @property User created_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property bool is_template 
 * @property bool deleted Record deletion indicator
 * @property string related_doc_rev_id 
 * @property string related_doc_id 
 * @property string selected_revision_name 
 * @property string linked_id 
 * @property string selected_revision_id 
 * @property string latest_revision_id 
 * @property string selected_revision_filename 
 * @property string contract_name 
 * @property string contract_status 
 * @property string template_type 
 * @property string latest_revision_name 
 * @property string last_rev_create_date 
 * @property string related_doc_rev_number The related document version number for Meta-Data framework
 * @property string document_revision_id 
 * @property string document_name 
 * @property string doc_id Document ID from documents web server provider
 * @property string doc_type Document type (ex: Google, box.net, IBM SmartCloud)
 * @property string doc_url Document URL from documents web server provider
 * @property string description Full text of the note
 * @property string created_by User who created record
 * @property string name 
 * @property string date_entered Date record created
 * @property string date_modified Date record last modified
 * @property string modified_user_id User who last modified record
 * @property string filename The filename of the document attachment
 * @property string active_date 
 * @property string id Unique identifier
 * @property string revision 
 * @property string last_rev_created_name 
 * @property string last_rev_mime_type 
 * @property string status Document status for Meta-Data framework
 * @property string status_id 
 * @property string exp_date 
 * @property string category_id 
 * @property string subcategory_id 
 * @property string latest_revision 
 *
 * @method Document getRelatedRelated_doc_name
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method User[] getRelatedAssigned_user_link
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_id
 *
 */
class Document {
	/** 
	 * @var Document The related document name for Meta-Data framework
	 */
	 public $related_doc_name;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $cases;

	/** 
	 * @var Link2 
	 */
	 public $bugs;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $opportunities;

	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $contracts;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $revisions;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var bool 
	 */
	 public $is_template;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $related_doc_rev_id;

	/** 
	 * @var string 
	 */
	 public $related_doc_id;

	/** 
	 * @var string 
	 */
	 public $selected_revision_name;

	/** 
	 * @var string 
	 */
	 public $linked_id;

	/** 
	 * @var string 
	 */
	 public $selected_revision_id;

	/** 
	 * @var string 
	 */
	 public $latest_revision_id;

	/** 
	 * @var string 
	 */
	 public $selected_revision_filename;

	/** 
	 * @var string 
	 */
	 public $contract_name;

	/** 
	 * @var string 
	 */
	 public $contract_status;

	/** 
	 * @var string 
	 */
	 public $template_type;

	/** 
	 * @var string 
	 */
	 public $latest_revision_name;

	/** 
	 * @var string 
	 */
	 public $last_rev_create_date;

	/** 
	 * @var string The related document version number for Meta-Data framework
	 */
	 public $related_doc_rev_number;

	/** 
	 * @var string 
	 */
	 public $document_revision_id;

	/** 
	 * @var string 
	 */
	 public $document_name;

	/** 
	 * @var string Document ID from documents web server provider
	 */
	 public $doc_id;

	/** 
	 * @var string Document type (ex: Google, box.net, IBM SmartCloud)
	 */
	 public $doc_type;

	/** 
	 * @var string Document URL from documents web server provider
	 */
	 public $doc_url;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string The filename of the document attachment
	 */
	 public $filename;

	/** 
	 * @var string 
	 */
	 public $active_date;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $revision;

	/** 
	 * @var string 
	 */
	 public $last_rev_created_name;

	/** 
	 * @var string 
	 */
	 public $last_rev_mime_type;

	/** 
	 * @var string Document status for Meta-Data framework
	 */
	 public $status;

	/** 
	 * @var string 
	 */
	 public $status_id;

	/** 
	 * @var string 
	 */
	 public $exp_date;

	/** 
	 * @var string 
	 */
	 public $category_id;

	/** 
	 * @var string 
	 */
	 public $subcategory_id;

	/** 
	 * @var string 
	 */
	 public $latest_revision;

	public $relationship_fields = [
		'modified_user_id' => 'modified_user_link',
		'assigned_user_id' => 'assigned_user_link',
		'created_by' => 'created_by_link',
	];

}

/**
 * Class EAPM
 *
 * @property Link2 created_by_link 
 * @property Link2 assigned_user_link 
 * @property Link2 modified_user_link 
 * @property User assigned_user_name 
 * @property User created_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User modified_by_name 
 * @property bool deleted Record deletion indicator
 * @property bool validated 
 * @property string consumer_key 
 * @property string api_data Any API data that the external API may wish to store on a per-user basis
 * @property string consumer_secret 
 * @property string oauth_token 
 * @property string application 
 * @property string oauth_secret 
 * @property string note 
 * @property string password 
 * @property string date_modified Date record last modified
 * @property string modified_user_id User who last modified record
 * @property string description Full text of the note
 * @property string id Unique identifier
 * @property string date_entered Date record created
 * @property string created_by User who created record
 * @property string name 
 * @property string url 
 *
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedModified_user_link
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedModified_by_name
 *
 */
class EAPM {
	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool 
	 */
	 public $validated;

	/** 
	 * @var string 
	 */
	 public $consumer_key;

	/** 
	 * @var string Any API data that the external API may wish to store on a per-user basis
	 */
	 public $api_data;

	/** 
	 * @var string 
	 */
	 public $consumer_secret;

	/** 
	 * @var string 
	 */
	 public $oauth_token;

	/** 
	 * @var string 
	 */
	 public $application;

	/** 
	 * @var string 
	 */
	 public $oauth_secret;

	/** 
	 * @var string 
	 */
	 public $note;

	/** 
	 * @var string 
	 */
	 public $password;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $url;

	public $relationship_fields = [
		'assigned_user_id' => 'assigned_user_link',
		'created_by' => 'created_by_link',
		'modified_user_id' => 'modified_user_link',
	];

}

/**
 * Class EmailMan
 *
 * @property bool deleted Record deletion indicator
 * @property bool in_queue Flag indicating if item still in queue
 * @property string related_type Descriptor of the Sugar object indicated by related_id
 * @property string related_id ID of Sugar object to which this item is related
 * @property string date_modified Date record last modified
 * @property string recipient_name 
 * @property string recipient_email 
 * @property string campaign_name 
 * @property string message_name 
 * @property string send_attempts Number of attempts made to send this item
 * @property string in_queue_date Datetime in which item entered queue
 * @property string marketing_id 
 * @property string campaign_id ID of related campaign
 * @property string id Unique identifier
 * @property string list_id Associated list
 * @property string send_date_time 
 * @property string date_entered Date record created
 * @property string modified_user_id User ID who last modified record
 * @property string user_id User ID representing assigned-to user
 *
 *
 */
class EmailMan {
	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool Flag indicating if item still in queue
	 */
	 public $in_queue;

	/** 
	 * @var string Descriptor of the Sugar object indicated by related_id
	 */
	 public $related_type;

	/** 
	 * @var string ID of Sugar object to which this item is related
	 */
	 public $related_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $recipient_name;

	/** 
	 * @var string 
	 */
	 public $recipient_email;

	/** 
	 * @var string 
	 */
	 public $campaign_name;

	/** 
	 * @var string 
	 */
	 public $message_name;

	/** 
	 * @var string Number of attempts made to send this item
	 */
	 public $send_attempts;

	/** 
	 * @var string Datetime in which item entered queue
	 */
	 public $in_queue_date;

	/** 
	 * @var string 
	 */
	 public $marketing_id;

	/** 
	 * @var string ID of related campaign
	 */
	 public $campaign_id;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string Associated list
	 */
	 public $list_id;

	/** 
	 * @var string 
	 */
	 public $send_date_time;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string User ID who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string User ID representing assigned-to user
	 */
	 public $user_id;

	public $relationship_fields = [
	];

}

/**
 * Class EmailMarketing
 *
 * @property EmailTemplate template_name 
 * @property Link2 emailtemplate 
 * @property Link2 prospectlists 
 * @property bool all_prospect_lists 
 * @property bool deleted 
 * @property string template_id 
 * @property string date_start 
 * @property string status 
 * @property string inbound_email_id 
 * @property string prospect_list_name 
 * @property string campaign_id 
 * @property string reply_to_addr 
 * @property string modified_user_id 
 * @property string date_modified 
 * @property string date_entered 
 * @property string created_by 
 * @property string name 
 * @property string reply_to_name 
 * @property string from_addr 
 * @property string from_name 
 * @property string id 
 *
 * @method EmailTemplate getRelatedTemplate_name
 *
 */
class EmailMarketing {
	/** 
	 * @var EmailTemplate 
	 */
	 public $template_name;

	/** 
	 * @var Link2 
	 */
	 public $emailtemplate;

	/** 
	 * @var Link2 
	 */
	 public $prospectlists;

	/** 
	 * @var bool 
	 */
	 public $all_prospect_lists;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $template_id;

	/** 
	 * @var string 
	 */
	 public $date_start;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string 
	 */
	 public $inbound_email_id;

	/** 
	 * @var string 
	 */
	 public $prospect_list_name;

	/** 
	 * @var string 
	 */
	 public $campaign_id;

	/** 
	 * @var string 
	 */
	 public $reply_to_addr;

	/** 
	 * @var string 
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $reply_to_name;

	/** 
	 * @var string 
	 */
	 public $from_addr;

	/** 
	 * @var string 
	 */
	 public $from_name;

	/** 
	 * @var string 
	 */
	 public $id;

	public $relationship_fields = [
		'template_id' => 'emailtemplate',
	];

}

/**
 * Class Email
 *
 * @property Link2 bugs 
 * @property Link2 cases 
 * @property Link2 contacts 
 * @property Link2 accounts 
 * @property Link2 assigned_user_link 
 * @property Link2 created_by_link 
 * @property Link2 modified_user_link 
 * @property Link2 leads 
 * @property Link2 opportunities 
 * @property Link2 users 
 * @property Link2 notes 
 * @property Link2 meetings 
 * @property Link2 tasks 
 * @property Link2 prospects 
 * @property Link2 project 
 * @property Link2 projecttask 
 * @property bool reply_to_status I you reply to an email then reply to status of original email is set
 * @property bool flagged flagged status
 * @property bool deleted Record deletion indicator
 * @property string from_addr_name 
 * @property string reply_to_addr 
 * @property string cc_addrs_names 
 * @property string bcc_addrs_names 
 * @property string to_addrs_names 
 * @property string created_by User name who created record
 * @property string date_modified Date record last modified
 * @property string date_entered Date record created
 * @property string assigned_user_id User ID that last modified record
 * @property string assigned_user_name 
 * @property string modified_user_id User ID that last modified record
 * @property string raw_source 
 * @property string parent_id ID of Sugar object referenced by parent_type (deprecated as of 4.2)
 * @property string message_id ID of the email item obtained from the email transport system
 * @property string intent Target of action used in Inbound Email assignment
 * @property string id Unique identifier
 * @property string status 
 * @property string type Type of email (ex: draft)
 * @property string mailbox_id 
 * @property string date_sent 
 * @property string parent_type Identifier of Sugar module to which this email is associated (deprecated as of 4.2)
 * @property string parent_name 
 * @property string description_html 
 * @property string description 
 * @property string name The subject of the email
 *
 * @method Bug[] getRelatedBugs
 * @method aCase[] getRelatedCases
 * @method Contact[] getRelatedContacts
 * @method Account[] getRelatedAccounts
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method Lead[] getRelatedLeads
 * @method Opportunity[] getRelatedOpportunities
 * @method User[] getRelatedUsers
 * @method Note[] getRelatedNotes
 * @method Meeting[] getRelatedMeetings
 * @method Task[] getRelatedTasks
 * @method Prospect[] getRelatedProspects
 * @method Project[] getRelatedProject
 * @method ProjectTask[] getRelatedProjecttask
 *
 */
class Email {
	/** 
	 * @var Link2 
	 */
	 public $bugs;

	/** 
	 * @var Link2 
	 */
	 public $cases;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $opportunities;

	/** 
	 * @var Link2 
	 */
	 public $users;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $prospects;

	/** 
	 * @var Link2 
	 */
	 public $project;

	/** 
	 * @var Link2 
	 */
	 public $projecttask;

	/** 
	 * @var bool I you reply to an email then reply to status of original email is set
	 */
	 public $reply_to_status;

	/** 
	 * @var bool flagged status
	 */
	 public $flagged;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $from_addr_name;

	/** 
	 * @var string 
	 */
	 public $reply_to_addr;

	/** 
	 * @var string 
	 */
	 public $cc_addrs_names;

	/** 
	 * @var string 
	 */
	 public $bcc_addrs_names;

	/** 
	 * @var string 
	 */
	 public $to_addrs_names;

	/** 
	 * @var string User name who created record
	 */
	 public $created_by;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string User ID that last modified record
	 */
	 public $assigned_user_id;

	/** 
	 * @var string 
	 */
	 public $assigned_user_name;

	/** 
	 * @var string User ID that last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $raw_source;

	/** 
	 * @var string ID of Sugar object referenced by parent_type (deprecated as of 4.2)
	 */
	 public $parent_id;

	/** 
	 * @var string ID of the email item obtained from the email transport system
	 */
	 public $message_id;

	/** 
	 * @var string Target of action used in Inbound Email assignment
	 */
	 public $intent;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string Type of email (ex: draft)
	 */
	 public $type;

	/** 
	 * @var string 
	 */
	 public $mailbox_id;

	/** 
	 * @var string 
	 */
	 public $date_sent;

	/** 
	 * @var string Identifier of Sugar module to which this email is associated (deprecated as of 4.2)
	 */
	 public $parent_type;

	/** 
	 * @var string 
	 */
	 public $parent_name;

	/** 
	 * @var string 
	 */
	 public $description_html;

	/** 
	 * @var string 
	 */
	 public $description;

	/** 
	 * @var string The subject of the email
	 */
	 public $name;

	public $relationship_fields = [
	];

}

/**
 * Class EmailTemplate
 *
 * @property Link2 assigned_user_link 
 * @property User assigned_user_id User ID assigned to record
 * @property User assigned_user_name 
 * @property bool deleted Record deletion indicator
 * @property bool text_only Should be checked if email template is to be sent in text only
 * @property string body_html HTML formatted email body to be used in resulting email
 * @property string type Type of the email template
 * @property string body Plain text body to be used in resulting email
 * @property string subject Email subject to be used in resulting email
 * @property string modified_user_id User who last modified record
 * @property string date_modified Date record last modified
 * @property string date_entered Date record created
 * @property string created_by User who created record
 * @property string published 
 * @property string description Email template description
 * @property string name Email template name
 * @property string id Unique identifier
 *
 * @method User[] getRelatedAssigned_user_link
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedAssigned_user_name
 *
 */
class EmailTemplate {
	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool Should be checked if email template is to be sent in text only
	 */
	 public $text_only;

	/** 
	 * @var string HTML formatted email body to be used in resulting email
	 */
	 public $body_html;

	/** 
	 * @var string Type of the email template
	 */
	 public $type;

	/** 
	 * @var string Plain text body to be used in resulting email
	 */
	 public $body;

	/** 
	 * @var string Email subject to be used in resulting email
	 */
	 public $subject;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $published;

	/** 
	 * @var string Email template description
	 */
	 public $description;

	/** 
	 * @var string Email template name
	 */
	 public $name;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
		'assigned_user_id' => 'assigned_user_link',
	];

}

/**
 * Class EmailText
 *
 * @property bool deleted 
 * @property string description Email body in plain text
 * @property string description_html Email body in HTML format
 * @property string raw_source Full raw source of email
 * @property string bcc_addrs Email address(es) of person(s) to receive a blind carbon copy of the email
 * @property string cc_addrs Email address(es) of person(s) to receive a carbon copy of the email
 * @property string from_addr Email address of person who send the email
 * @property string reply_to_addr reply to email address
 * @property string to_addrs Email address(es) of person(s) to receive the email
 * @property string email_id Foriegn key to emails table
 *
 *
 */
class EmailText {
	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string Email body in plain text
	 */
	 public $description;

	/** 
	 * @var string Email body in HTML format
	 */
	 public $description_html;

	/** 
	 * @var string Full raw source of email
	 */
	 public $raw_source;

	/** 
	 * @var string Email address(es) of person(s) to receive a blind carbon copy of the email
	 */
	 public $bcc_addrs;

	/** 
	 * @var string Email address(es) of person(s) to receive a carbon copy of the email
	 */
	 public $cc_addrs;

	/** 
	 * @var string Email address of person who send the email
	 */
	 public $from_addr;

	/** 
	 * @var string reply to email address
	 */
	 public $reply_to_addr;

	/** 
	 * @var string Email address(es) of person(s) to receive the email
	 */
	 public $to_addrs;

	/** 
	 * @var string Foriegn key to emails table
	 */
	 public $email_id;

	public $relationship_fields = [
	];

}

/**
 * Class Employee
 *
 * @property  m_accept_status_fields 
 * @property  c_accept_status_fields 
 * @property Link2 contacts_sync 
 * @property Link2 meetings 
 * @property Link2 reports_to_link 
 * @property Link2 email_addresses 
 * @property Link2 reportees 
 * @property Link2 email_addresses_primary 
 * @property Link2 aclroles 
 * @property Link2 calls 
 * @property Link2 eapm 
 * @property Link2 oauth_tokens 
 * @property Link2 project_resource 
 * @property Link2 prospect_lists 
 * @property Link2 holidays 
 * @property Link2 emails_users 
 * @property User reports_to_name 
 * @property bool portal_only 
 * @property bool show_on_employees 
 * @property bool is_group 
 * @property bool sugar_login 
 * @property bool system_generated_password 
 * @property bool external_auth_only 
 * @property bool is_admin 
 * @property bool receive_notifications 
 * @property bool deleted 
 * @property string email1 
 * @property string employee_status 
 * @property string messenger_id 
 * @property string accept_status_name 
 * @property string reports_to_id 
 * @property string email_link_type 
 * @property string accept_status_id 
 * @property string messenger_type 
 * @property string address_state 
 * @property string description 
 * @property string name 
 * @property string date_entered 
 * @property string date_modified 
 * @property string modified_by_name 
 * @property string modified_user_id 
 * @property string full_name 
 * @property string last_name 
 * @property string user_hash 
 * @property string user_name 
 * @property string pwd_last_changed 
 * @property string authenticate_id 
 * @property string first_name 
 * @property string created_by 
 * @property string created_by_name 
 * @property string address_street 
 * @property string status 
 * @property string address_city 
 * @property string id 
 * @property string address_postalcode 
 * @property string address_country 
 * @property string phone_fax 
 * @property string phone_other 
 * @property string department 
 * @property string title 
 * @property string phone_home 
 * @property string phone_mobile 
 * @property string phone_work 
 * @property string UserType 
 *
 * @method  getRelatedM_accept_status_fields
 * @method  getRelatedC_accept_status_fields
 * @method Array[] getRelatedReports_to_link
 * @method Array[] getRelatedReportees
 * @method User[] getRelatedAclroles
 * @method OAuthToken[] getRelatedOauth_tokens
 * @method ProspectList[] getRelatedProspect_lists
 * @method Array[] getRelatedHolidays
 * @method Email[] getRelatedEmails_users
 * @method User getRelatedReports_to_name
 *
 */
class Employee {
	/** 
	 * @var  
	 */
	 public $m_accept_status_fields;

	/** 
	 * @var  
	 */
	 public $c_accept_status_fields;

	/** 
	 * @var Link2 
	 */
	 public $contacts_sync;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $reports_to_link;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses;

	/** 
	 * @var Link2 
	 */
	 public $reportees;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses_primary;

	/** 
	 * @var Link2 
	 */
	 public $aclroles;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $eapm;

	/** 
	 * @var Link2 
	 */
	 public $oauth_tokens;

	/** 
	 * @var Link2 
	 */
	 public $project_resource;

	/** 
	 * @var Link2 
	 */
	 public $prospect_lists;

	/** 
	 * @var Link2 
	 */
	 public $holidays;

	/** 
	 * @var Link2 
	 */
	 public $emails_users;

	/** 
	 * @var User 
	 */
	 public $reports_to_name;

	/** 
	 * @var bool 
	 */
	 public $portal_only;

	/** 
	 * @var bool 
	 */
	 public $show_on_employees;

	/** 
	 * @var bool 
	 */
	 public $is_group;

	/** 
	 * @var bool 
	 */
	 public $sugar_login;

	/** 
	 * @var bool 
	 */
	 public $system_generated_password;

	/** 
	 * @var bool 
	 */
	 public $external_auth_only;

	/** 
	 * @var bool 
	 */
	 public $is_admin;

	/** 
	 * @var bool 
	 */
	 public $receive_notifications;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $email1;

	/** 
	 * @var string 
	 */
	 public $employee_status;

	/** 
	 * @var string 
	 */
	 public $messenger_id;

	/** 
	 * @var string 
	 */
	 public $accept_status_name;

	/** 
	 * @var string 
	 */
	 public $reports_to_id;

	/** 
	 * @var string 
	 */
	 public $email_link_type;

	/** 
	 * @var string 
	 */
	 public $accept_status_id;

	/** 
	 * @var string 
	 */
	 public $messenger_type;

	/** 
	 * @var string 
	 */
	 public $address_state;

	/** 
	 * @var string 
	 */
	 public $description;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $modified_by_name;

	/** 
	 * @var string 
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $full_name;

	/** 
	 * @var string 
	 */
	 public $last_name;

	/** 
	 * @var string 
	 */
	 public $user_hash;

	/** 
	 * @var string 
	 */
	 public $user_name;

	/** 
	 * @var string 
	 */
	 public $pwd_last_changed;

	/** 
	 * @var string 
	 */
	 public $authenticate_id;

	/** 
	 * @var string 
	 */
	 public $first_name;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $created_by_name;

	/** 
	 * @var string 
	 */
	 public $address_street;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string 
	 */
	 public $address_city;

	/** 
	 * @var string 
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $address_postalcode;

	/** 
	 * @var string 
	 */
	 public $address_country;

	/** 
	 * @var string 
	 */
	 public $phone_fax;

	/** 
	 * @var string 
	 */
	 public $phone_other;

	/** 
	 * @var string 
	 */
	 public $department;

	/** 
	 * @var string 
	 */
	 public $title;

	/** 
	 * @var string 
	 */
	 public $phone_home;

	/** 
	 * @var string 
	 */
	 public $phone_mobile;

	/** 
	 * @var string 
	 */
	 public $phone_work;

	/** 
	 * @var string 
	 */
	 public $UserType;

	public $relationship_fields = [
		'reports_to_id' => 'reports_to_link',
	];

}

/**
 * Class ImportMap
 *
 * @property bool deleted Record deletion indicator
 * @property bool has_header Indicator if source file contains a header row
 * @property string date_entered Date record created
 * @property string date_modified Date record last modified
 * @property string is_published Indicator if mapping is published
 * @property string assigned_user_id Assigned-to user
 * @property string default_values Default Values for all columns
 * @property string content Mappings for all columns
 * @property string source 
 * @property string name Name of import map
 * @property string enclosure 
 * @property string delimiter 
 * @property string module Module used for import
 * @property string id Unique identifier
 *
 *
 */
class ImportMap {
	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool Indicator if source file contains a header row
	 */
	 public $has_header;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Indicator if mapping is published
	 */
	 public $is_published;

	/** 
	 * @var string Assigned-to user
	 */
	 public $assigned_user_id;

	/** 
	 * @var string Default Values for all columns
	 */
	 public $default_values;

	/** 
	 * @var string Mappings for all columns
	 */
	 public $content;

	/** 
	 * @var string 
	 */
	 public $source;

	/** 
	 * @var string Name of import map
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $enclosure;

	/** 
	 * @var string 
	 */
	 public $delimiter;

	/** 
	 * @var string Module used for import
	 */
	 public $module;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class ImportMap
 *
 * @property bool deleted Record deletion indicator
 * @property bool has_header Indicator if source file contains a header row
 * @property string date_entered Date record created
 * @property string date_modified Date record last modified
 * @property string is_published Indicator if mapping is published
 * @property string assigned_user_id Assigned-to user
 * @property string default_values Default Values for all columns
 * @property string content Mappings for all columns
 * @property string source 
 * @property string name Name of import map
 * @property string enclosure 
 * @property string delimiter 
 * @property string module Module used for import
 * @property string id Unique identifier
 *
 *
 */
class ImportMap {
	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool Indicator if source file contains a header row
	 */
	 public $has_header;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Indicator if mapping is published
	 */
	 public $is_published;

	/** 
	 * @var string Assigned-to user
	 */
	 public $assigned_user_id;

	/** 
	 * @var string Default Values for all columns
	 */
	 public $default_values;

	/** 
	 * @var string Mappings for all columns
	 */
	 public $content;

	/** 
	 * @var string 
	 */
	 public $source;

	/** 
	 * @var string Name of import map
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $enclosure;

	/** 
	 * @var string 
	 */
	 public $delimiter;

	/** 
	 * @var string Module used for import
	 */
	 public $module;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class InboundEmail
 *
 * @property Link2 modified_user_id_link 
 * @property Link2 created_by_link 
 * @property bool delete_seen Delete email from server once read (seen)
 * @property bool is_personal Personal account flag
 * @property bool deleted Record deltion indicator
 * @property string service 
 * @property string mailbox_type 
 * @property string mailbox 
 * @property string stored_options 
 * @property string groupfolder_id Unique identifier
 * @property string group_id Group ID (unused)
 * @property string port Port used to access mail server
 * @property string template_id Template used for auto-reply
 * @property string email_user User name allowed access to mail server
 * @property string modified_user_id User who last modified record
 * @property string date_modified Date record last modified
 * @property string date_entered Date record created
 * @property string created_by User who created record
 * @property string name Name given to the inbound email mailbox
 * @property string id Unique identifier
 * @property string server_url Mail server URL
 * @property string status Status of the inbound email mailbox (ex: Active or Inactive)
 * @property string email_password Password of user identified by email_user
 *
 * @method User[] getRelatedModified_user_id_link
 * @method User[] getRelatedCreated_by_link
 *
 */
class InboundEmail {
	/** 
	 * @var Link2 
	 */
	 public $modified_user_id_link;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var bool Delete email from server once read (seen)
	 */
	 public $delete_seen;

	/** 
	 * @var bool Personal account flag
	 */
	 public $is_personal;

	/** 
	 * @var bool Record deltion indicator
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $service;

	/** 
	 * @var string 
	 */
	 public $mailbox_type;

	/** 
	 * @var string 
	 */
	 public $mailbox;

	/** 
	 * @var string 
	 */
	 public $stored_options;

	/** 
	 * @var string Unique identifier
	 */
	 public $groupfolder_id;

	/** 
	 * @var string Group ID (unused)
	 */
	 public $group_id;

	/** 
	 * @var string Port used to access mail server
	 */
	 public $port;

	/** 
	 * @var string Template used for auto-reply
	 */
	 public $template_id;

	/** 
	 * @var string User name allowed access to mail server
	 */
	 public $email_user;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Name given to the inbound email mailbox
	 */
	 public $name;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string Mail server URL
	 */
	 public $server_url;

	/** 
	 * @var string Status of the inbound email mailbox (ex: Active or Inactive)
	 */
	 public $status;

	/** 
	 * @var string Password of user identified by email_user
	 */
	 public $email_password;

	public $relationship_fields = [
	];

}

/**
 * Class Lead
 *
 * @property  m_accept_status_fields 
 * @property  c_accept_status_fields 
 * @property Campaign campaign_name 
 * @property Contact report_to_name 
 * @property Link2 prospect_lists 
 * @property Link2 oldcalls 
 * @property Link2 contact 
 * @property Link2 contacts 
 * @property Link2 accounts 
 * @property Link2 campaign_leads 
 * @property Link2 campaigns 
 * @property Link2 reportees 
 * @property Link2 emails 
 * @property Link2 email_addresses_primary 
 * @property Link2 email_addresses 
 * @property Link2 reports_to_link 
 * @property Link2 tasks 
 * @property Link2 notes 
 * @property Link2 opportunity 
 * @property Link2 calls 
 * @property Link2 oldmeetings 
 * @property Link2 created_by_link 
 * @property Link2 modified_user_link 
 * @property Link2 meetings 
 * @property Link2 assigned_user_link 
 * @property User modified_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User created_by_name 
 * @property User assigned_user_name 
 * @property bool email_opt_out 
 * @property bool converted Has Lead been converted to a Contact (and other Sugar objects)
 * @property bool invalid_email 
 * @property bool deleted Record deletion indicator
 * @property bool do_not_call An indicator of whether contact can be called
 * @property bool webtolead_invalid_email Indicator that email address for lead is invalid
 * @property bool webtolead_email_opt_out Indicator signaling if lead elects to opt out of email campaigns
 * @property string account_description Description of lead account
 * @property string contact_id If converted, Contact ID resulting from the conversion
 * @property string reports_to_id ID of Contact the Lead reports to
 * @property string account_name Account name for lead
 * @property string status_description Description of the status of the lead
 * @property string accept_status_name 
 * @property string birthdate The birthdate of the contact
 * @property string webtolead_email2 Secondary email address of lead
 * @property string portal_name Portal user name when lead created via lead portal
 * @property string portal_app Portal application that resulted in created of lead
 * @property string website URL of website for the company
 * @property string webtolead_email1 Main email address of lead
 * @property string status Status of the lead
 * @property string opportunity_name Opportunity name associated with lead
 * @property string opportunity_id If converted, Opportunity ID resulting from the conversion
 * @property string opportunity_amount Amount of the opportunity
 * @property string campaign_id Campaign that generated lead
 * @property string accept_status_id 
 * @property string account_id If converted, Account ID resulting from the conversion
 * @property string assistant_phone Phone number of the assistant of the contact
 * @property string email 
 * @property string phone_home Home phone number of the contact
 * @property string department Department the lead belongs to
 * @property string title The title of the contact
 * @property string phone_mobile Mobile phone number of the contact
 * @property string phone_work Work phone number of the contact
 * @property string email1 
 * @property string phone_fax Contact fax number
 * @property string phone_other Other phone number for the contact
 * @property string full_name 
 * @property string last_name Last name of the contact
 * @property string date_modified Date record last modified
 * @property string date_entered Date record created
 * @property string name 
 * @property string modified_user_id User who last modified record
 * @property string created_by User who created record
 * @property string first_name First name of the contact
 * @property string salutation Contact salutation (e.g., Mr, Ms)
 * @property string description Full text of the note
 * @property string email2 
 * @property string primary_address_street Street address for primary address
 * @property string alt_address_country Country for alternate address
 * @property string alt_address_postalcode Postal code for alternate address
 * @property string alt_address_state State for alternate address
 * @property string assistant Name of the assistant of the contact
 * @property string id Unique identifier
 * @property string lead_source Lead source (ex: Web, print)
 * @property string refered_by Identifies who refered the lead
 * @property string email_addresses_non_primary 
 * @property string alt_address_city City for alternate address
 * @property string alt_address_street_3 
 * @property string primary_address_city City for primary address
 * @property string primary_address_street_3 
 * @property string primary_address_street_2 
 * @property string primary_address_state State for primary address
 * @property string primary_address_postalcode Postal code for primary address
 * @property string alt_address_street_2 
 * @property string alt_address_street Street address for alternate address
 * @property string primary_address_country Country for primary address
 * @property string lead_source_description Description of the lead source
 *
 * @method  getRelatedM_accept_status_fields
 * @method  getRelatedC_accept_status_fields
 * @method Campaign getRelatedCampaign_name
 * @method Contact getRelatedReport_to_name
 * @method ProspectList[] getRelatedProspect_lists
 * @method Contact[] getRelatedContacts
 * @method CampaignLog[] getRelatedCampaigns
 * @method Array[] getRelatedReportees
 * @method Array[] getRelatedReports_to_link
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method User[] getRelatedAssigned_user_link
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_name
 *
 */
class Lead {
	/** 
	 * @var  
	 */
	 public $m_accept_status_fields;

	/** 
	 * @var  
	 */
	 public $c_accept_status_fields;

	/** 
	 * @var Campaign 
	 */
	 public $campaign_name;

	/** 
	 * @var Contact 
	 */
	 public $report_to_name;

	/** 
	 * @var Link2 
	 */
	 public $prospect_lists;

	/** 
	 * @var Link2 
	 */
	 public $oldcalls;

	/** 
	 * @var Link2 
	 */
	 public $contact;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $campaign_leads;

	/** 
	 * @var Link2 
	 */
	 public $campaigns;

	/** 
	 * @var Link2 
	 */
	 public $reportees;

	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses_primary;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses;

	/** 
	 * @var Link2 
	 */
	 public $reports_to_link;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $opportunity;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $oldmeetings;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var bool 
	 */
	 public $email_opt_out;

	/** 
	 * @var bool Has Lead been converted to a Contact (and other Sugar objects)
	 */
	 public $converted;

	/** 
	 * @var bool 
	 */
	 public $invalid_email;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool An indicator of whether contact can be called
	 */
	 public $do_not_call;

	/** 
	 * @var bool Indicator that email address for lead is invalid
	 */
	 public $webtolead_invalid_email;

	/** 
	 * @var bool Indicator signaling if lead elects to opt out of email campaigns
	 */
	 public $webtolead_email_opt_out;

	/** 
	 * @var string Description of lead account
	 */
	 public $account_description;

	/** 
	 * @var string If converted, Contact ID resulting from the conversion
	 */
	 public $contact_id;

	/** 
	 * @var string ID of Contact the Lead reports to
	 */
	 public $reports_to_id;

	/** 
	 * @var string Account name for lead
	 */
	 public $account_name;

	/** 
	 * @var string Description of the status of the lead
	 */
	 public $status_description;

	/** 
	 * @var string 
	 */
	 public $accept_status_name;

	/** 
	 * @var string The birthdate of the contact
	 */
	 public $birthdate;

	/** 
	 * @var string Secondary email address of lead
	 */
	 public $webtolead_email2;

	/** 
	 * @var string Portal user name when lead created via lead portal
	 */
	 public $portal_name;

	/** 
	 * @var string Portal application that resulted in created of lead
	 */
	 public $portal_app;

	/** 
	 * @var string URL of website for the company
	 */
	 public $website;

	/** 
	 * @var string Main email address of lead
	 */
	 public $webtolead_email1;

	/** 
	 * @var string Status of the lead
	 */
	 public $status;

	/** 
	 * @var string Opportunity name associated with lead
	 */
	 public $opportunity_name;

	/** 
	 * @var string If converted, Opportunity ID resulting from the conversion
	 */
	 public $opportunity_id;

	/** 
	 * @var string Amount of the opportunity
	 */
	 public $opportunity_amount;

	/** 
	 * @var string Campaign that generated lead
	 */
	 public $campaign_id;

	/** 
	 * @var string 
	 */
	 public $accept_status_id;

	/** 
	 * @var string If converted, Account ID resulting from the conversion
	 */
	 public $account_id;

	/** 
	 * @var string Phone number of the assistant of the contact
	 */
	 public $assistant_phone;

	/** 
	 * @var string 
	 */
	 public $email;

	/** 
	 * @var string Home phone number of the contact
	 */
	 public $phone_home;

	/** 
	 * @var string Department the lead belongs to
	 */
	 public $department;

	/** 
	 * @var string The title of the contact
	 */
	 public $title;

	/** 
	 * @var string Mobile phone number of the contact
	 */
	 public $phone_mobile;

	/** 
	 * @var string Work phone number of the contact
	 */
	 public $phone_work;

	/** 
	 * @var string 
	 */
	 public $email1;

	/** 
	 * @var string Contact fax number
	 */
	 public $phone_fax;

	/** 
	 * @var string Other phone number for the contact
	 */
	 public $phone_other;

	/** 
	 * @var string 
	 */
	 public $full_name;

	/** 
	 * @var string Last name of the contact
	 */
	 public $last_name;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string First name of the contact
	 */
	 public $first_name;

	/** 
	 * @var string Contact salutation (e.g., Mr, Ms)
	 */
	 public $salutation;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string 
	 */
	 public $email2;

	/** 
	 * @var string Street address for primary address
	 */
	 public $primary_address_street;

	/** 
	 * @var string Country for alternate address
	 */
	 public $alt_address_country;

	/** 
	 * @var string Postal code for alternate address
	 */
	 public $alt_address_postalcode;

	/** 
	 * @var string State for alternate address
	 */
	 public $alt_address_state;

	/** 
	 * @var string Name of the assistant of the contact
	 */
	 public $assistant;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string Lead source (ex: Web, print)
	 */
	 public $lead_source;

	/** 
	 * @var string Identifies who refered the lead
	 */
	 public $refered_by;

	/** 
	 * @var string 
	 */
	 public $email_addresses_non_primary;

	/** 
	 * @var string City for alternate address
	 */
	 public $alt_address_city;

	/** 
	 * @var string 
	 */
	 public $alt_address_street_3;

	/** 
	 * @var string City for primary address
	 */
	 public $primary_address_city;

	/** 
	 * @var string 
	 */
	 public $primary_address_street_3;

	/** 
	 * @var string 
	 */
	 public $primary_address_street_2;

	/** 
	 * @var string State for primary address
	 */
	 public $primary_address_state;

	/** 
	 * @var string Postal code for primary address
	 */
	 public $primary_address_postalcode;

	/** 
	 * @var string 
	 */
	 public $alt_address_street_2;

	/** 
	 * @var string Street address for alternate address
	 */
	 public $alt_address_street;

	/** 
	 * @var string Country for primary address
	 */
	 public $primary_address_country;

	/** 
	 * @var string Description of the lead source
	 */
	 public $lead_source_description;

	public $relationship_fields = [
		'campaign_id' => 'campaign_leads',
		'modified_user_id' => 'modified_user_link',
		'created_by' => 'created_by_link',
		'assigned_user_id' => 'assigned_user_link',
	];

}

/**
 * Class Meeting
 *
 * @property Contact contact_name 
 * @property Link2 notes 
 * @property Link2 contacts 
 * @property Link2 case 
 * @property Link2 assigned_user_link 
 * @property Link2 opportunity 
 * @property Link2 users 
 * @property Link2 accounts 
 * @property Link2 leads 
 * @property Link2 created_by_link 
 * @property Link2 modified_user_link 
 * @property User modified_by_name 
 * @property User assigned_user_name 
 * @property User created_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property bool email_reminder_sent Whether email reminder is already sent
 * @property bool deleted Record deletion indicator
 * @property bool email_reminder_checked checkbox indicating whether or not the email reminder value is set (Meta-data only)
 * @property bool reminder_checked checkbox indicating whether or not the reminder value is set (Meta-data only)
 * @property string reminder_time Specifies when a reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start
 * @property string email_reminder_time Specifies when a email reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start
 * @property string outlook_id When the Sugar Plug-in for Microsoft Outlook syncs an Outlook appointment, this is the Outlook appointment item ID
 * @property string sequence Meeting update sequence for meetings as per iCalendar standards
 * @property string parent_name 
 * @property string repeat_type Type of recurrence
 * @property string repeat_parent_id Id of the first element of recurring records
 * @property string recurring_source Source of recurring meeting
 * @property string duration Duration handler dropdown
 * @property string repeat_count Number of recurrence
 * @property string repeat_until Repeat until specified date
 * @property string repeat_interval Interval of recurrence
 * @property string repeat_dow Days of week in recurrence
 * @property string contact_id 
 * @property string parent_type Module meeting is associated with
 * @property string accept_status 
 * @property string accept_status 
 * @property string location Meeting location
 * @property string password Meeting password
 * @property string join_url Join URL
 * @property string description Full text of the note
 * @property string created_by User who created record
 * @property string name Meeting name
 * @property string date_entered Date record created
 * @property string date_modified Date record last modified
 * @property string modified_user_id User who last modified record
 * @property string host_url Host URL
 * @property string displayed_url Meeting URL
 * @property string id Unique identifier
 * @property string status Meeting status (ex: Planned, Held, Not held)
 * @property string type Meeting type (ex: WebEx, Other)
 * @property string direction Indicates whether call is inbound or outbound
 * @property string date_end Date meeting ends
 * @property string date_start Date of start of meeting
 * @property string creator Meeting creator
 * @property string external_id Meeting ID for external app API
 * @property string duration_hours Duration (hours)
 * @property string duration_minutes Duration (minutes)
 * @property string parent_id ID of item indicated by parent_type
 *
 * @method Contact getRelatedContact_name
 * @method Note[] getRelatedNotes
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_id
 *
 */
class Meeting {
	/** 
	 * @var Contact 
	 */
	 public $contact_name;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $case;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $opportunity;

	/** 
	 * @var Link2 
	 */
	 public $users;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var bool Whether email reminder is already sent
	 */
	 public $email_reminder_sent;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool checkbox indicating whether or not the email reminder value is set (Meta-data only)
	 */
	 public $email_reminder_checked;

	/** 
	 * @var bool checkbox indicating whether or not the reminder value is set (Meta-data only)
	 */
	 public $reminder_checked;

	/** 
	 * @var string Specifies when a reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start
	 */
	 public $reminder_time;

	/** 
	 * @var string Specifies when a email reminder alert should be issued; -1 means no alert; otherwise the number of seconds prior to the start
	 */
	 public $email_reminder_time;

	/** 
	 * @var string When the Sugar Plug-in for Microsoft Outlook syncs an Outlook appointment, this is the Outlook appointment item ID
	 */
	 public $outlook_id;

	/** 
	 * @var string Meeting update sequence for meetings as per iCalendar standards
	 */
	 public $sequence;

	/** 
	 * @var string 
	 */
	 public $parent_name;

	/** 
	 * @var string Type of recurrence
	 */
	 public $repeat_type;

	/** 
	 * @var string Id of the first element of recurring records
	 */
	 public $repeat_parent_id;

	/** 
	 * @var string Source of recurring meeting
	 */
	 public $recurring_source;

	/** 
	 * @var string Duration handler dropdown
	 */
	 public $duration;

	/** 
	 * @var string Number of recurrence
	 */
	 public $repeat_count;

	/** 
	 * @var string Repeat until specified date
	 */
	 public $repeat_until;

	/** 
	 * @var string Interval of recurrence
	 */
	 public $repeat_interval;

	/** 
	 * @var string Days of week in recurrence
	 */
	 public $repeat_dow;

	/** 
	 * @var string 
	 */
	 public $contact_id;

	/** 
	 * @var string Module meeting is associated with
	 */
	 public $parent_type;

	/** 
	 * @var string 
	 */
	 public $accept_status;

	/** 
	 * @var string 
	 */
	 public $accept_status;

	/** 
	 * @var string Meeting location
	 */
	 public $location;

	/** 
	 * @var string Meeting password
	 */
	 public $password;

	/** 
	 * @var string Join URL
	 */
	 public $join_url;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Meeting name
	 */
	 public $name;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Host URL
	 */
	 public $host_url;

	/** 
	 * @var string Meeting URL
	 */
	 public $displayed_url;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string Meeting status (ex: Planned, Held, Not held)
	 */
	 public $status;

	/** 
	 * @var string Meeting type (ex: WebEx, Other)
	 */
	 public $type;

	/** 
	 * @var string Indicates whether call is inbound or outbound
	 */
	 public $direction;

	/** 
	 * @var string Date meeting ends
	 */
	 public $date_end;

	/** 
	 * @var string Date of start of meeting
	 */
	 public $date_start;

	/** 
	 * @var string Meeting creator
	 */
	 public $creator;

	/** 
	 * @var string Meeting ID for external app API
	 */
	 public $external_id;

	/** 
	 * @var string Duration (hours)
	 */
	 public $duration_hours;

	/** 
	 * @var string Duration (minutes)
	 */
	 public $duration_minutes;

	/** 
	 * @var string ID of item indicated by parent_type
	 */
	 public $parent_id;

	public $relationship_fields = [
		'contact_id' => 'contacts',
		'modified_user_id' => 'modified_user_link',
		'assigned_user_id' => 'assigned_user_link',
		'created_by' => 'created_by_link',
	];

}

/**
 * Class MergeRecord
 *
 *
 *
 */
class MergeRecord {
	public $relationship_fields = [
	];

}

/**
 * Class Note
 *
 * @property Contact contact_name 
 * @property Link2 accounts 
 * @property Link2 opportunities 
 * @property Link2 cases 
 * @property Link2 bugs 
 * @property Link2 contact 
 * @property Link2 created_by_link 
 * @property Link2 modified_user_link 
 * @property Link2 emails 
 * @property Link2 leads 
 * @property Link2 calls 
 * @property Link2 assigned_user_link 
 * @property Link2 tasks 
 * @property Link2 meetings 
 * @property Link2 project_tasks 
 * @property Link2 projects 
 * @property User assigned_user_name 
 * @property User created_by_name 
 * @property User modified_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property bool portal_flag Portal flag indicator determines if note created via portal
 * @property bool deleted Record deletion indicator
 * @property bool embed_flag Embed flag indicator determines if note embedded in email
 * @property string acase_id 
 * @property string opportunity_id 
 * @property string lead_id 
 * @property string parent_name 
 * @property string created_by User who created record
 * @property string name Name of the note
 * @property string file_mime_type Attachment MIME type
 * @property string modified_user_id User who last modified record
 * @property string date_modified Date record last modified
 * @property string id Unique identifier
 * @property string date_entered Date record created
 * @property string file_url Path to file (can be URL)
 * @property string filename File name associated with the note (attachment)
 * @property string contact_phone 
 * @property string contact_email 
 * @property string description Full text of the note
 * @property string contact_id Contact ID note is associated with
 * @property string parent_type Sugar module the Note is associated with
 * @property string parent_id The ID of the Sugar item specified in parent_type
 * @property string account_id 
 *
 * @method Contact getRelatedContact_name
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method User[] getRelatedAssigned_user_link
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedCreated_by_name
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_id
 *
 */
class Note {
	/** 
	 * @var Contact 
	 */
	 public $contact_name;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $opportunities;

	/** 
	 * @var Link2 
	 */
	 public $cases;

	/** 
	 * @var Link2 
	 */
	 public $bugs;

	/** 
	 * @var Link2 
	 */
	 public $contact;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $project_tasks;

	/** 
	 * @var Link2 
	 */
	 public $projects;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var bool Portal flag indicator determines if note created via portal
	 */
	 public $portal_flag;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool Embed flag indicator determines if note embedded in email
	 */
	 public $embed_flag;

	/** 
	 * @var string 
	 */
	 public $acase_id;

	/** 
	 * @var string 
	 */
	 public $opportunity_id;

	/** 
	 * @var string 
	 */
	 public $lead_id;

	/** 
	 * @var string 
	 */
	 public $parent_name;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Name of the note
	 */
	 public $name;

	/** 
	 * @var string Attachment MIME type
	 */
	 public $file_mime_type;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Path to file (can be URL)
	 */
	 public $file_url;

	/** 
	 * @var string File name associated with the note (attachment)
	 */
	 public $filename;

	/** 
	 * @var string 
	 */
	 public $contact_phone;

	/** 
	 * @var string 
	 */
	 public $contact_email;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string Contact ID note is associated with
	 */
	 public $contact_id;

	/** 
	 * @var string Sugar module the Note is associated with
	 */
	 public $parent_type;

	/** 
	 * @var string The ID of the Sugar item specified in parent_type
	 */
	 public $parent_id;

	/** 
	 * @var string 
	 */
	 public $account_id;

	public $relationship_fields = [
		'contact_id' => 'contact',
		'assigned_user_id' => 'assigned_user_link',
		'created_by' => 'created_by_link',
		'modified_user_id' => 'modified_user_link',
	];

}

/**
 * Class OAuthKey
 *
 * @property Link2 modified_user_link 
 * @property Link2 assigned_user_link 
 * @property Link2 created_by_link 
 * @property Link2 tokens 
 * @property User created_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User modified_by_name 
 * @property User assigned_user_name 
 * @property bool deleted Record deletion indicator
 * @property string c_secret Consumer secret key
 * @property string c_key Consumer public key
 * @property string description Full text of the note
 * @property string date_entered Date record created
 * @property string name 
 * @property string date_modified Date record last modified
 * @property string modified_user_id User who last modified record
 * @property string created_by User who created record
 * @property string id Unique identifier
 *
 * @method User[] getRelatedModified_user_link
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedCreated_by_link
 * @method OAuthToken[] getRelatedTokens
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_name
 *
 */
class OAuthKey {
	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $tokens;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string Consumer secret key
	 */
	 public $c_secret;

	/** 
	 * @var string Consumer public key
	 */
	 public $c_key;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
		'created_by' => 'created_by_link',
		'modified_user_id' => 'modified_user_link',
		'assigned_user_id' => 'assigned_user_link',
	];

}

/**
 * Class OAuthToken
 *
 * @property Link2 consumer_link 
 * @property Link2 assigned_user_link 
 * @property OAuthKey consumer_name 
 * @property User assigned_user_name 
 * @property User assigned_user_id User ID assigned to record
 * @property bool deleted Record deletion indicator
 * @property string tstate Token state
 * @property string secret Secret key
 * @property string consumer Token related to the consumer
 * @property string token_ts Token timestamp
 * @property string callback_url Callback URL for Authorization
 * @property string verify Token verification info
 * @property string id Unique identifier
 *
 * @method OAuthKey[] getRelatedConsumer_link
 * @method User[] getRelatedAssigned_user_link
 * @method OAuthKey getRelatedConsumer_name
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedAssigned_user_id
 *
 */
class OAuthToken {
	/** 
	 * @var Link2 
	 */
	 public $consumer_link;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var OAuthKey 
	 */
	 public $consumer_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string Token state
	 */
	 public $tstate;

	/** 
	 * @var string Secret key
	 */
	 public $secret;

	/** 
	 * @var string Token related to the consumer
	 */
	 public $consumer;

	/** 
	 * @var string Token timestamp
	 */
	 public $token_ts;

	/** 
	 * @var string Callback URL for Authorization
	 */
	 public $callback_url;

	/** 
	 * @var string Token verification info
	 */
	 public $verify;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
		'consumer' => 'consumer_link',
		'assigned_user_id' => 'assigned_user_link',
	];

}

/**
 * Class Opportunity
 *
 * @property Account account_name 
 * @property Campaign campaign_name 
 * @property Currency currency_name 
 * @property Currency currency_symbol 
 * @property Link2 assigned_user_link 
 * @property Link2 tasks 
 * @property Link2 emails 
 * @property Link2 campaign_opportunities 
 * @property Link2 contacts 
 * @property Link2 meetings 
 * @property Link2 calls 
 * @property Link2 created_by_link 
 * @property Link2 campaigns 
 * @property Link2 campaign_link 
 * @property Link2 currencies 
 * @property Link2 leads 
 * @property Link2 project 
 * @property Link2 notes 
 * @property Link2 accounts 
 * @property Link2 documents 
 * @property Link2 modified_user_link 
 * @property User assigned_user_name 
 * @property User modified_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User created_by_name 
 * @property bool deleted Record deletion indicator
 * @property string probability The probability of closure
 * @property string sales_stage Indication of progression towards closure
 * @property string lead_source Source of the opportunity
 * @property string created_by User who created record
 * @property string description Full text of the note
 * @property string modified_user_id User who last modified record
 * @property string date_modified Date record last modified
 * @property string name Name of the opportunity
 * @property string date_entered Date record created
 * @property string opportunity_type Type of opportunity (ex: Existing, New)
 * @property string account_id 
 * @property string currency_id Currency used for display purposes
 * @property string date_closed Expected or actual date the oppportunity will close
 * @property string amount_usdollar Formatted amount of the opportunity
 * @property string amount Unconverted amount of the opportunity
 * @property string campaign_id Campaign that generated lead
 * @property string id Unique identifier
 * @property string next_step The next step in the sales process
 *
 * @method Account getRelatedAccount_name
 * @method Campaign getRelatedCampaign_name
 * @method Currency getRelatedCurrency_name
 * @method Currency getRelatedCurrency_symbol
 * @method User[] getRelatedAssigned_user_link
 * @method Contact[] getRelatedContacts
 * @method User[] getRelatedCreated_by_link
 * @method CampaignLog[] getRelatedCampaigns
 * @method Campaign[] getRelatedCampaign_link
 * @method Account[] getRelatedAccounts
 * @method User[] getRelatedModified_user_link
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedCreated_by_name
 *
 */
class Opportunity {
	/** 
	 * @var Account 
	 */
	 public $account_name;

	/** 
	 * @var Campaign 
	 */
	 public $campaign_name;

	/** 
	 * @var Currency 
	 */
	 public $currency_name;

	/** 
	 * @var Currency 
	 */
	 public $currency_symbol;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var Link2 
	 */
	 public $campaign_opportunities;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $campaigns;

	/** 
	 * @var Link2 
	 */
	 public $campaign_link;

	/** 
	 * @var Link2 
	 */
	 public $currencies;

	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $project;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $documents;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string The probability of closure
	 */
	 public $probability;

	/** 
	 * @var string Indication of progression towards closure
	 */
	 public $sales_stage;

	/** 
	 * @var string Source of the opportunity
	 */
	 public $lead_source;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Name of the opportunity
	 */
	 public $name;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Type of opportunity (ex: Existing, New)
	 */
	 public $opportunity_type;

	/** 
	 * @var string 
	 */
	 public $account_id;

	/** 
	 * @var string Currency used for display purposes
	 */
	 public $currency_id;

	/** 
	 * @var string Expected or actual date the oppportunity will close
	 */
	 public $date_closed;

	/** 
	 * @var string Formatted amount of the opportunity
	 */
	 public $amount_usdollar;

	/** 
	 * @var string Unconverted amount of the opportunity
	 */
	 public $amount;

	/** 
	 * @var string Campaign that generated lead
	 */
	 public $campaign_id;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string The next step in the sales process
	 */
	 public $next_step;

	public $relationship_fields = [
		'account_id' => 'accounts',
		'campaign_id' => 'campaign_opportunities',
		'assigned_user_id' => 'assigned_user_link',
		'modified_user_id' => 'modified_user_link',
		'created_by' => 'created_by_link',
	];

}

/**
 * Class Project
 *
 * @property Link2 meetings 
 * @property Link2 calls 
 * @property Link2 emails 
 * @property Link2 tasks 
 * @property Link2 notes 
 * @property Link2 contacts 
 * @property Link2 quotes 
 * @property Link2 accounts 
 * @property Link2 projecttask 
 * @property Link2 created_by_link 
 * @property Link2 bugs 
 * @property Link2 products 
 * @property Link2 cases 
 * @property Link2 assigned_user_link 
 * @property Link2 modified_user_link 
 * @property Link2 opportunities 
 * @property User created_by_name 
 * @property User assigned_user_name 
 * @property User modified_by_name 
 * @property bool deleted Record deletion indicator
 * @property string total_actual_effort 
 * @property string modified_user_id User who last modified record
 * @property string created_by User who created record
 * @property string assigned_user_id User assigned to this record
 * @property string date_modified Date record last modified
 * @property string date_entered Date record created
 * @property string name Project name
 * @property string description Project description
 * @property string priority 
 * @property string total_estimated_effort 
 * @property string status 
 * @property string estimated_end_date 
 * @property string estimated_start_date 
 * @property string id Unique identifier
 *
 * @method User[] getRelatedCreated_by_link
 * @method Bug[] getRelatedBugs
 * @method [] getRelatedProducts
 * @method aCase[] getRelatedCases
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedModified_user_link
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedModified_by_name
 *
 */
class Project {
	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $quotes;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $projecttask;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $bugs;

	/** 
	 * @var Link2 
	 */
	 public $products;

	/** 
	 * @var Link2 
	 */
	 public $cases;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $opportunities;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $total_actual_effort;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string User assigned to this record
	 */
	 public $assigned_user_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Project name
	 */
	 public $name;

	/** 
	 * @var string Project description
	 */
	 public $description;

	/** 
	 * @var string 
	 */
	 public $priority;

	/** 
	 * @var string 
	 */
	 public $total_estimated_effort;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string 
	 */
	 public $estimated_end_date;

	/** 
	 * @var string 
	 */
	 public $estimated_start_date;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
		'created_by' => 'created_by_link',
		'assigned_user_id' => 'users',
		'modified_user_id' => 'modified_user_link',
	];

}

/**
 * Class ProjectTask
 *
 * @property Link2 calls 
 * @property Link2 meetings 
 * @property Link2 tasks 
 * @property Link2 notes 
 * @property Link2 emails 
 * @property Link2 projects 
 * @property Link2 assigned_user_link 
 * @property Link2 modified_user_link 
 * @property Link2 project_name_link 
 * @property Link2 created_by_link 
 * @property Project project_name 
 * @property User assigned_user_name 
 * @property User created_by_name 
 * @property User modified_by_name 
 * @property bool milestone_flag 
 * @property bool deleted 
 * @property string time_start 
 * @property string date_start 
 * @property string time_finish 
 * @property string date_finish 
 * @property string utilization 
 * @property string predecessors 
 * @property string description 
 * @property string date_modified 
 * @property string date_entered 
 * @property string project_id 
 * @property string project_task_id 
 * @property string status 
 * @property string name 
 * @property string actual_effort 
 * @property string estimated_effort 
 * @property string parent_task_id 
 * @property string assigned_user_id 
 * @property string time_due 
 * @property string date_due 
 * @property string actual_duration 
 * @property string percent_complete 
 * @property string modified_user_id 
 * @property string id 
 * @property string order_number 
 * @property string task_number 
 * @property string duration 
 * @property string created_by 
 * @property string priority 
 * @property string duration_unit 
 *
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedModified_user_link
 * @method Project[] getRelatedProject_name_link
 * @method User[] getRelatedCreated_by_link
 * @method Project getRelatedProject_name
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedCreated_by_name
 * @method User getRelatedModified_by_name
 *
 */
class ProjectTask {
	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var Link2 
	 */
	 public $projects;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $project_name_link;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Project 
	 */
	 public $project_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var bool 
	 */
	 public $milestone_flag;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $time_start;

	/** 
	 * @var string 
	 */
	 public $date_start;

	/** 
	 * @var string 
	 */
	 public $time_finish;

	/** 
	 * @var string 
	 */
	 public $date_finish;

	/** 
	 * @var string 
	 */
	 public $utilization;

	/** 
	 * @var string 
	 */
	 public $predecessors;

	/** 
	 * @var string 
	 */
	 public $description;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $project_id;

	/** 
	 * @var string 
	 */
	 public $project_task_id;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $actual_effort;

	/** 
	 * @var string 
	 */
	 public $estimated_effort;

	/** 
	 * @var string 
	 */
	 public $parent_task_id;

	/** 
	 * @var string 
	 */
	 public $assigned_user_id;

	/** 
	 * @var string 
	 */
	 public $time_due;

	/** 
	 * @var string 
	 */
	 public $date_due;

	/** 
	 * @var string 
	 */
	 public $actual_duration;

	/** 
	 * @var string 
	 */
	 public $percent_complete;

	/** 
	 * @var string 
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $order_number;

	/** 
	 * @var string 
	 */
	 public $task_number;

	/** 
	 * @var string 
	 */
	 public $duration;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $priority;

	/** 
	 * @var string 
	 */
	 public $duration_unit;

	public $relationship_fields = [
		'project_id' => 'project_name_link',
		'assigned_user_id' => 'users',
		'created_by' => 'created_by_link',
		'modified_user_id' => 'modified_user_link',
	];

}

/**
 * Class ProspectList
 *
 * @property Link2 leads 
 * @property Link2 contacts 
 * @property Link2 prospects 
 * @property Link2 accounts 
 * @property Link2 campaigns 
 * @property Link2 email_marketing 
 * @property Link2 assigned_user_link 
 * @property Link2 users 
 * @property User created_by_name 
 * @property User assigned_user_name 
 * @property User modified_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property bool deleted 
 * @property string name 
 * @property string list_type 
 * @property string id 
 * @property string marketing_id 
 * @property string marketing_name 
 * @property string date_entered 
 * @property string date_modified 
 * @property string domain_name 
 * @property string entry_count 
 * @property string created_by 
 * @property string modified_user_id 
 * @property string description 
 *
 * @method User[] getRelatedAssigned_user_link
 * @method User getRelatedCreated_by_name
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_id
 *
 */
class ProspectList {
	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $prospects;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $campaigns;

	/** 
	 * @var Link2 
	 */
	 public $email_marketing;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $users;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $list_type;

	/** 
	 * @var string 
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $marketing_id;

	/** 
	 * @var string 
	 */
	 public $marketing_name;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $domain_name;

	/** 
	 * @var string 
	 */
	 public $entry_count;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $description;

	public $relationship_fields = [
		'assigned_user_id' => 'assigned_user_link',
	];

}

/**
 * Class Prospect
 *
 * @property Link2 modified_user_link 
 * @property Link2 created_by_link 
 * @property Link2 assigned_user_link 
 * @property Link2 email_addresses 
 * @property Link2 email_addresses_primary 
 * @property Link2 campaigns 
 * @property Link2 prospect_lists 
 * @property Link2 meetings 
 * @property Link2 notes 
 * @property Link2 tasks 
 * @property Link2 calls 
 * @property Link2 emails 
 * @property User assigned_user_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User created_by_name 
 * @property User modified_by_name 
 * @property bool invalid_email 
 * @property bool do_not_call 
 * @property bool email_opt_out 
 * @property bool deleted Record deletion indicator
 * @property string first_name First name of the contact
 * @property string salutation Contact salutation (e.g., Mr, Ms)
 * @property string email_addresses_non_primary 
 * @property string assistant_phone Phone number of the assistant of the contact
 * @property string assistant Name of the assistant of the contact
 * @property string alt_address_city City for alternate address
 * @property string alt_address_state State for alternate address
 * @property string alt_address_postalcode Postal code for alternate address
 * @property string alt_address_country Country for alternate address
 * @property string tracker_key 
 * @property string lead_id 
 * @property string modified_user_id User who last modified record
 * @property string date_modified Date record last modified
 * @property string date_entered Date record created
 * @property string name 
 * @property string created_by User who created record
 * @property string description Full text of the note
 * @property string alt_address_street_3 
 * @property string account_name 
 * @property string campaign_id Campaign that generated lead
 * @property string birthdate 
 * @property string alt_address_street_2 
 * @property string phone_work Work phone number of the contact
 * @property string phone_other Other phone number for the contact
 * @property string phone_fax Contact fax number
 * @property string email1 
 * @property string phone_mobile Mobile phone number of the contact
 * @property string email 
 * @property string department The department of the contact
 * @property string full_name 
 * @property string phone_home Home phone number of the contact
 * @property string email2 
 * @property string last_name Last name of the contact
 * @property string primary_address_state State for primary address
 * @property string primary_address_postalcode Postal code for primary address
 * @property string primary_address_country Country for primary address
 * @property string alt_address_street Street address for alternate address
 * @property string primary_address_city City for primary address
 * @property string primary_address_street_3 
 * @property string id Unique identifier
 * @property string primary_address_street Street address for primary address
 * @property string primary_address_street_2 
 * @property string title The title of the contact
 *
 * @method User[] getRelatedModified_user_link
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedAssigned_user_link
 * @method CampaignLog[] getRelatedCampaigns
 * @method ProspectList[] getRelatedProspect_lists
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedCreated_by_name
 * @method User getRelatedModified_by_name
 *
 */
class Prospect {
	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses_primary;

	/** 
	 * @var Link2 
	 */
	 public $campaigns;

	/** 
	 * @var Link2 
	 */
	 public $prospect_lists;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $tasks;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $emails;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var bool 
	 */
	 public $invalid_email;

	/** 
	 * @var bool 
	 */
	 public $do_not_call;

	/** 
	 * @var bool 
	 */
	 public $email_opt_out;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string First name of the contact
	 */
	 public $first_name;

	/** 
	 * @var string Contact salutation (e.g., Mr, Ms)
	 */
	 public $salutation;

	/** 
	 * @var string 
	 */
	 public $email_addresses_non_primary;

	/** 
	 * @var string Phone number of the assistant of the contact
	 */
	 public $assistant_phone;

	/** 
	 * @var string Name of the assistant of the contact
	 */
	 public $assistant;

	/** 
	 * @var string City for alternate address
	 */
	 public $alt_address_city;

	/** 
	 * @var string State for alternate address
	 */
	 public $alt_address_state;

	/** 
	 * @var string Postal code for alternate address
	 */
	 public $alt_address_postalcode;

	/** 
	 * @var string Country for alternate address
	 */
	 public $alt_address_country;

	/** 
	 * @var string 
	 */
	 public $tracker_key;

	/** 
	 * @var string 
	 */
	 public $lead_id;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string 
	 */
	 public $alt_address_street_3;

	/** 
	 * @var string 
	 */
	 public $account_name;

	/** 
	 * @var string Campaign that generated lead
	 */
	 public $campaign_id;

	/** 
	 * @var string 
	 */
	 public $birthdate;

	/** 
	 * @var string 
	 */
	 public $alt_address_street_2;

	/** 
	 * @var string Work phone number of the contact
	 */
	 public $phone_work;

	/** 
	 * @var string Other phone number for the contact
	 */
	 public $phone_other;

	/** 
	 * @var string Contact fax number
	 */
	 public $phone_fax;

	/** 
	 * @var string 
	 */
	 public $email1;

	/** 
	 * @var string Mobile phone number of the contact
	 */
	 public $phone_mobile;

	/** 
	 * @var string 
	 */
	 public $email;

	/** 
	 * @var string The department of the contact
	 */
	 public $department;

	/** 
	 * @var string 
	 */
	 public $full_name;

	/** 
	 * @var string Home phone number of the contact
	 */
	 public $phone_home;

	/** 
	 * @var string 
	 */
	 public $email2;

	/** 
	 * @var string Last name of the contact
	 */
	 public $last_name;

	/** 
	 * @var string State for primary address
	 */
	 public $primary_address_state;

	/** 
	 * @var string Postal code for primary address
	 */
	 public $primary_address_postalcode;

	/** 
	 * @var string Country for primary address
	 */
	 public $primary_address_country;

	/** 
	 * @var string Street address for alternate address
	 */
	 public $alt_address_street;

	/** 
	 * @var string City for primary address
	 */
	 public $primary_address_city;

	/** 
	 * @var string 
	 */
	 public $primary_address_street_3;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string Street address for primary address
	 */
	 public $primary_address_street;

	/** 
	 * @var string 
	 */
	 public $primary_address_street_2;

	/** 
	 * @var string The title of the contact
	 */
	 public $title;

	public $relationship_fields = [
		'assigned_user_id' => 'assigned_user_link',
		'created_by' => 'created_by_link',
		'modified_user_id' => 'modified_user_link',
	];

}

/**
 * Class Relationship
 *
 * @property bool deleted 
 * @property bool reverse 
 * @property string join_key_rhs 
 * @property string join_key_lhs 
 * @property string relationship_type 
 * @property string relationship_role_column_value 
 * @property string join_table 
 * @property string relationship_role_column 
 * @property string rhs_key 
 * @property string lhs_module 
 * @property string relationship_name 
 * @property string lhs_table 
 * @property string lhs_key 
 * @property string rhs_table 
 * @property string rhs_module 
 * @property string id 
 *
 *
 */
class Relationship {
	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var bool 
	 */
	 public $reverse;

	/** 
	 * @var string 
	 */
	 public $join_key_rhs;

	/** 
	 * @var string 
	 */
	 public $join_key_lhs;

	/** 
	 * @var string 
	 */
	 public $relationship_type;

	/** 
	 * @var string 
	 */
	 public $relationship_role_column_value;

	/** 
	 * @var string 
	 */
	 public $join_table;

	/** 
	 * @var string 
	 */
	 public $relationship_role_column;

	/** 
	 * @var string 
	 */
	 public $rhs_key;

	/** 
	 * @var string 
	 */
	 public $lhs_module;

	/** 
	 * @var string 
	 */
	 public $relationship_name;

	/** 
	 * @var string 
	 */
	 public $lhs_table;

	/** 
	 * @var string 
	 */
	 public $lhs_key;

	/** 
	 * @var string 
	 */
	 public $rhs_table;

	/** 
	 * @var string 
	 */
	 public $rhs_module;

	/** 
	 * @var string 
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class Release
 *
 * @property bool deleted 
 * @property string name 
 * @property string list_order 
 * @property string status 
 * @property string created_by 
 * @property string modified_user_id 
 * @property string date_entered 
 * @property string date_modified 
 * @property string id 
 *
 *
 */
class Release {
	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $list_order;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class Role
 *
 * @property Link2 users 
 * @property bool deleted 
 * @property string description 
 * @property string modules 
 * @property string name 
 * @property string created_by 
 * @property string date_entered 
 * @property string date_modified 
 * @property string modified_user_id 
 * @property string id 
 *
 *
 */
class Role {
	/** 
	 * @var Link2 
	 */
	 public $users;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $description;

	/** 
	 * @var string 
	 */
	 public $modules;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class SavedSearch
 *
 * @property Link2 assigned_user_link 
 * @property bool deleted 
 * @property string assigned_user_name 
 * @property string contents 
 * @property string description 
 * @property string assigned_user_id 
 * @property string date_modified 
 * @property string name 
 * @property string search_module 
 * @property string date_entered 
 * @property string id 
 *
 * @method User[] getRelatedAssigned_user_link
 *
 */
class SavedSearch {
	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $assigned_user_name;

	/** 
	 * @var string 
	 */
	 public $contents;

	/** 
	 * @var string 
	 */
	 public $description;

	/** 
	 * @var string 
	 */
	 public $assigned_user_id;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $search_module;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class Scheduler
 *
 * @property Link2 schedulers_times 
 * @property Link2 created_by_link 
 * @property Link2 modified_user_link 
 * @property User modified_by_name 
 * @property User created_by_name 
 * @property bool adv_interval 
 * @property bool catch_up 
 * @property bool deleted 
 * @property string date_time_end 
 * @property string job_interval 
 * @property string time_from 
 * @property string time_to 
 * @property string status 
 * @property string last_run 
 * @property string job 
 * @property string created_by 
 * @property string date_modified 
 * @property string date_entered 
 * @property string modified_user_id 
 * @property string name 
 * @property string job_function 
 * @property string job_url 
 * @property string id 
 * @property string date_time_start 
 *
 * @method SchedulersJob[] getRelatedSchedulers_times
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method User getRelatedModified_by_name
 * @method User getRelatedCreated_by_name
 *
 */
class Scheduler {
	/** 
	 * @var Link2 
	 */
	 public $schedulers_times;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var bool 
	 */
	 public $adv_interval;

	/** 
	 * @var bool 
	 */
	 public $catch_up;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $date_time_end;

	/** 
	 * @var string 
	 */
	 public $job_interval;

	/** 
	 * @var string 
	 */
	 public $time_from;

	/** 
	 * @var string 
	 */
	 public $time_to;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string 
	 */
	 public $last_run;

	/** 
	 * @var string 
	 */
	 public $job;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $job_function;

	/** 
	 * @var string 
	 */
	 public $job_url;

	/** 
	 * @var string 
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $date_time_start;

	public $relationship_fields = [
		'modified_user_id' => 'modified_user_link',
		'created_by' => 'created_by_link',
	];

}

/**
 * Class SchedulersJob
 *
 * @property Link2 assigned_user_link 
 * @property Link2 schedulers 
 * @property User assigned_user_name 
 * @property User assigned_user_id User ID assigned to record
 * @property bool deleted 
 * @property bool requeue 
 * @property string data 
 * @property string retry_count 
 * @property string client 
 * @property string percent_complete 
 * @property string target 
 * @property string job_delay 
 * @property string failure_count 
 * @property string status 
 * @property string date_entered 
 * @property string name 
 * @property string id 
 * @property string date_modified 
 * @property string scheduler_id 
 * @property string resolution 
 * @property string execute_time 
 * @property string message 
 *
 * @method User[] getRelatedAssigned_user_link
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedAssigned_user_id
 *
 */
class SchedulersJob {
	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $schedulers;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var bool 
	 */
	 public $requeue;

	/** 
	 * @var string 
	 */
	 public $data;

	/** 
	 * @var string 
	 */
	 public $retry_count;

	/** 
	 * @var string 
	 */
	 public $client;

	/** 
	 * @var string 
	 */
	 public $percent_complete;

	/** 
	 * @var string 
	 */
	 public $target;

	/** 
	 * @var string 
	 */
	 public $job_delay;

	/** 
	 * @var string 
	 */
	 public $failure_count;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $scheduler_id;

	/** 
	 * @var string 
	 */
	 public $resolution;

	/** 
	 * @var string 
	 */
	 public $execute_time;

	/** 
	 * @var string 
	 */
	 public $message;

	public $relationship_fields = [
		'assigned_user_id' => 'assigned_user_link',
	];

}

/**
 * Class SugarFeed
 *
 * @property Link2 created_by_link 
 * @property Link2 assigned_user_link 
 * @property Link2 modified_user_link 
 * @property User modified_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User assigned_user_name 
 * @property User created_by_name 
 * @property bool deleted Record deletion indicator
 * @property string related_module related module
 * @property string related_id related module
 * @property string link_url Name of the feed
 * @property string link_type Name of the feed
 * @property string name Name of the feed
 * @property string date_entered Date record created
 * @property string id Unique identifier
 * @property string created_by User who created record
 * @property string modified_user_id User who last modified record
 * @property string date_modified Date record last modified
 * @property string description Name of the feed
 *
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedAssigned_user_link
 * @method User[] getRelatedModified_user_link
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedCreated_by_name
 *
 */
class SugarFeed {
	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string related module
	 */
	 public $related_module;

	/** 
	 * @var string related module
	 */
	 public $related_id;

	/** 
	 * @var string Name of the feed
	 */
	 public $link_url;

	/** 
	 * @var string Name of the feed
	 */
	 public $link_type;

	/** 
	 * @var string Name of the feed
	 */
	 public $name;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string Name of the feed
	 */
	 public $description;

	public $relationship_fields = [
		'modified_user_id' => 'modified_user_link',
		'assigned_user_id' => 'assigned_user_link',
		'created_by' => 'created_by_link',
	];

}

/**
 * Class Task
 *
 * @property Contact contact_name 
 * @property Link2 created_by_link 
 * @property Link2 cases 
 * @property Link2 modified_user_link 
 * @property Link2 opportunities 
 * @property Link2 contacts 
 * @property Link2 accounts 
 * @property Link2 assigned_user_link 
 * @property Link2 bugs 
 * @property Link2 project_tasks 
 * @property Link2 notes 
 * @property Link2 contact_parent 
 * @property Link2 leads 
 * @property Link2 projects 
 * @property User assigned_user_name 
 * @property User modified_by_name 
 * @property User assigned_user_id User ID assigned to record
 * @property User created_by_name 
 * @property bool date_start_flag 
 * @property bool deleted Record deletion indicator
 * @property bool date_due_flag 
 * @property string description Full text of the note
 * @property string status 
 * @property string created_by User who created record
 * @property string modified_user_id User who last modified record
 * @property string name 
 * @property string date_entered Date record created
 * @property string date_modified Date record last modified
 * @property string date_due 
 * @property string priority 
 * @property string parent_name 
 * @property string parent_type The Sugar object to which the call is related
 * @property string date_start 
 * @property string parent_id 
 * @property string contact_id 
 * @property string contact_email 
 * @property string contact_phone 
 * @property string time_due 
 * @property string id Unique identifier
 *
 * @method Contact getRelatedContact_name
 * @method User[] getRelatedCreated_by_link
 * @method User[] getRelatedModified_user_link
 * @method Array[] getRelatedContacts
 * @method User[] getRelatedAssigned_user_link
 * @method Note[] getRelatedNotes
 * @method User getRelatedAssigned_user_name
 * @method User getRelatedModified_by_name
 * @method User getRelatedAssigned_user_id
 * @method User getRelatedCreated_by_name
 *
 */
class Task {
	/** 
	 * @var Contact 
	 */
	 public $contact_name;

	/** 
	 * @var Link2 
	 */
	 public $created_by_link;

	/** 
	 * @var Link2 
	 */
	 public $cases;

	/** 
	 * @var Link2 
	 */
	 public $modified_user_link;

	/** 
	 * @var Link2 
	 */
	 public $opportunities;

	/** 
	 * @var Link2 
	 */
	 public $contacts;

	/** 
	 * @var Link2 
	 */
	 public $accounts;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var Link2 
	 */
	 public $bugs;

	/** 
	 * @var Link2 
	 */
	 public $project_tasks;

	/** 
	 * @var Link2 
	 */
	 public $notes;

	/** 
	 * @var Link2 
	 */
	 public $contact_parent;

	/** 
	 * @var Link2 
	 */
	 public $leads;

	/** 
	 * @var Link2 
	 */
	 public $projects;

	/** 
	 * @var User 
	 */
	 public $assigned_user_name;

	/** 
	 * @var User 
	 */
	 public $modified_by_name;

	/** 
	 * @var User User ID assigned to record
	 */
	 public $assigned_user_id;

	/** 
	 * @var User 
	 */
	 public $created_by_name;

	/** 
	 * @var bool 
	 */
	 public $date_start_flag;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var bool 
	 */
	 public $date_due_flag;

	/** 
	 * @var string Full text of the note
	 */
	 public $description;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string User who created record
	 */
	 public $created_by;

	/** 
	 * @var string User who last modified record
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string Date record created
	 */
	 public $date_entered;

	/** 
	 * @var string Date record last modified
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $date_due;

	/** 
	 * @var string 
	 */
	 public $priority;

	/** 
	 * @var string 
	 */
	 public $parent_name;

	/** 
	 * @var string The Sugar object to which the call is related
	 */
	 public $parent_type;

	/** 
	 * @var string 
	 */
	 public $date_start;

	/** 
	 * @var string 
	 */
	 public $parent_id;

	/** 
	 * @var string 
	 */
	 public $contact_id;

	/** 
	 * @var string 
	 */
	 public $contact_email;

	/** 
	 * @var string 
	 */
	 public $contact_phone;

	/** 
	 * @var string 
	 */
	 public $time_due;

	/** 
	 * @var string Unique identifier
	 */
	 public $id;

	public $relationship_fields = [
		'contact_id' => 'contacts',
		'assigned_user_id' => 'assigned_user_link',
		'modified_user_id' => 'modified_user_link',
		'created_by' => 'created_by_link',
	];

}

/**
 * Class Tracker
 *
 * @property Link2 monitor_id_link 
 * @property Link2 assigned_user_link 
 * @property bool visible 
 * @property bool deleted Record deletion indicator
 * @property string session_id 
 * @property string action 
 * @property string date_modified 
 * @property string user_id 
 * @property string monitor_id 
 * @property string module_name 
 * @property string item_id 
 * @property string item_summary 
 * @property string id 
 *
 * @method User[] getRelatedAssigned_user_link
 *
 */
class Tracker {
	/** 
	 * @var Link2 
	 */
	 public $monitor_id_link;

	/** 
	 * @var Link2 
	 */
	 public $assigned_user_link;

	/** 
	 * @var bool 
	 */
	 public $visible;

	/** 
	 * @var bool Record deletion indicator
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $session_id;

	/** 
	 * @var string 
	 */
	 public $action;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $user_id;

	/** 
	 * @var string 
	 */
	 public $monitor_id;

	/** 
	 * @var string 
	 */
	 public $module_name;

	/** 
	 * @var string 
	 */
	 public $item_id;

	/** 
	 * @var string 
	 */
	 public $item_summary;

	/** 
	 * @var string 
	 */
	 public $id;

	public $relationship_fields = [
	];

}

/**
 * Class UserPreference
 *
 * @property bool deleted 
 * @property string assigned_user_name 
 * @property string contents 
 * @property string assigned_user_id 
 * @property string date_entered 
 * @property string category 
 * @property string id 
 * @property string date_modified 
 *
 *
 */
class UserPreference {
	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $assigned_user_name;

	/** 
	 * @var string 
	 */
	 public $contents;

	/** 
	 * @var string 
	 */
	 public $assigned_user_id;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $category;

	/** 
	 * @var string 
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	public $relationship_fields = [
	];

}

/**
 * Class User
 *
 * @property  m_accept_status_fields 
 * @property  c_accept_status_fields 
 * @property Link2 contacts_sync 
 * @property Link2 meetings 
 * @property Link2 reports_to_link 
 * @property Link2 email_addresses 
 * @property Link2 reportees 
 * @property Link2 email_addresses_primary 
 * @property Link2 aclroles 
 * @property Link2 calls 
 * @property Link2 eapm 
 * @property Link2 oauth_tokens 
 * @property Link2 project_resource 
 * @property Link2 prospect_lists 
 * @property Link2 holidays 
 * @property Link2 emails_users 
 * @property User reports_to_name 
 * @property bool portal_only 
 * @property bool show_on_employees 
 * @property bool is_group 
 * @property bool sugar_login 
 * @property bool system_generated_password 
 * @property bool external_auth_only 
 * @property bool is_admin 
 * @property bool receive_notifications 
 * @property bool deleted 
 * @property string email1 
 * @property string employee_status 
 * @property string messenger_id 
 * @property string accept_status_name 
 * @property string reports_to_id 
 * @property string email_link_type 
 * @property string accept_status_id 
 * @property string messenger_type 
 * @property string address_state 
 * @property string description 
 * @property string name 
 * @property string date_entered 
 * @property string date_modified 
 * @property string modified_by_name 
 * @property string modified_user_id 
 * @property string full_name 
 * @property string last_name 
 * @property string user_hash 
 * @property string user_name 
 * @property string pwd_last_changed 
 * @property string authenticate_id 
 * @property string first_name 
 * @property string created_by 
 * @property string created_by_name 
 * @property string address_street 
 * @property string status 
 * @property string address_city 
 * @property string id 
 * @property string address_postalcode 
 * @property string address_country 
 * @property string phone_fax 
 * @property string phone_other 
 * @property string department 
 * @property string title 
 * @property string phone_home 
 * @property string phone_mobile 
 * @property string phone_work 
 * @property string UserType 
 *
 * @method  getRelatedM_accept_status_fields
 * @method  getRelatedC_accept_status_fields
 * @method Array[] getRelatedReports_to_link
 * @method Array[] getRelatedReportees
 * @method User[] getRelatedAclroles
 * @method OAuthToken[] getRelatedOauth_tokens
 * @method ProspectList[] getRelatedProspect_lists
 * @method Array[] getRelatedHolidays
 * @method Email[] getRelatedEmails_users
 * @method User getRelatedReports_to_name
 *
 */
class User {
	/** 
	 * @var  
	 */
	 public $m_accept_status_fields;

	/** 
	 * @var  
	 */
	 public $c_accept_status_fields;

	/** 
	 * @var Link2 
	 */
	 public $contacts_sync;

	/** 
	 * @var Link2 
	 */
	 public $meetings;

	/** 
	 * @var Link2 
	 */
	 public $reports_to_link;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses;

	/** 
	 * @var Link2 
	 */
	 public $reportees;

	/** 
	 * @var Link2 
	 */
	 public $email_addresses_primary;

	/** 
	 * @var Link2 
	 */
	 public $aclroles;

	/** 
	 * @var Link2 
	 */
	 public $calls;

	/** 
	 * @var Link2 
	 */
	 public $eapm;

	/** 
	 * @var Link2 
	 */
	 public $oauth_tokens;

	/** 
	 * @var Link2 
	 */
	 public $project_resource;

	/** 
	 * @var Link2 
	 */
	 public $prospect_lists;

	/** 
	 * @var Link2 
	 */
	 public $holidays;

	/** 
	 * @var Link2 
	 */
	 public $emails_users;

	/** 
	 * @var User 
	 */
	 public $reports_to_name;

	/** 
	 * @var bool 
	 */
	 public $portal_only;

	/** 
	 * @var bool 
	 */
	 public $show_on_employees;

	/** 
	 * @var bool 
	 */
	 public $is_group;

	/** 
	 * @var bool 
	 */
	 public $sugar_login;

	/** 
	 * @var bool 
	 */
	 public $system_generated_password;

	/** 
	 * @var bool 
	 */
	 public $external_auth_only;

	/** 
	 * @var bool 
	 */
	 public $is_admin;

	/** 
	 * @var bool 
	 */
	 public $receive_notifications;

	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $email1;

	/** 
	 * @var string 
	 */
	 public $employee_status;

	/** 
	 * @var string 
	 */
	 public $messenger_id;

	/** 
	 * @var string 
	 */
	 public $accept_status_name;

	/** 
	 * @var string 
	 */
	 public $reports_to_id;

	/** 
	 * @var string 
	 */
	 public $email_link_type;

	/** 
	 * @var string 
	 */
	 public $accept_status_id;

	/** 
	 * @var string 
	 */
	 public $messenger_type;

	/** 
	 * @var string 
	 */
	 public $address_state;

	/** 
	 * @var string 
	 */
	 public $description;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $modified_by_name;

	/** 
	 * @var string 
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $full_name;

	/** 
	 * @var string 
	 */
	 public $last_name;

	/** 
	 * @var string 
	 */
	 public $user_hash;

	/** 
	 * @var string 
	 */
	 public $user_name;

	/** 
	 * @var string 
	 */
	 public $pwd_last_changed;

	/** 
	 * @var string 
	 */
	 public $authenticate_id;

	/** 
	 * @var string 
	 */
	 public $first_name;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $created_by_name;

	/** 
	 * @var string 
	 */
	 public $address_street;

	/** 
	 * @var string 
	 */
	 public $status;

	/** 
	 * @var string 
	 */
	 public $address_city;

	/** 
	 * @var string 
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $address_postalcode;

	/** 
	 * @var string 
	 */
	 public $address_country;

	/** 
	 * @var string 
	 */
	 public $phone_fax;

	/** 
	 * @var string 
	 */
	 public $phone_other;

	/** 
	 * @var string 
	 */
	 public $department;

	/** 
	 * @var string 
	 */
	 public $title;

	/** 
	 * @var string 
	 */
	 public $phone_home;

	/** 
	 * @var string 
	 */
	 public $phone_mobile;

	/** 
	 * @var string 
	 */
	 public $phone_work;

	/** 
	 * @var string 
	 */
	 public $UserType;

	public $relationship_fields = [
		'reports_to_id' => 'reports_to_link',
	];

}

/**
 * Class vCal
 *
 * @property bool deleted 
 * @property string source 
 * @property string content 
 * @property string type 
 * @property string date_modified 
 * @property string date_entered 
 * @property string id 
 * @property string user_id 
 *
 *
 */
class vCal {
	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $source;

	/** 
	 * @var string 
	 */
	 public $content;

	/** 
	 * @var string 
	 */
	 public $type;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $id;

	/** 
	 * @var string 
	 */
	 public $user_id;

	public $relationship_fields = [
	];

}

/**
 * Class Version
 *
 * @property bool deleted 
 * @property string name 
 * @property string file_version 
 * @property string db_version 
 * @property string created_by 
 * @property string modified_user_id 
 * @property string date_entered 
 * @property string date_modified 
 * @property string id 
 *
 *
 */
class Version {
	/** 
	 * @var bool 
	 */
	 public $deleted;

	/** 
	 * @var string 
	 */
	 public $name;

	/** 
	 * @var string 
	 */
	 public $file_version;

	/** 
	 * @var string 
	 */
	 public $db_version;

	/** 
	 * @var string 
	 */
	 public $created_by;

	/** 
	 * @var string 
	 */
	 public $modified_user_id;

	/** 
	 * @var string 
	 */
	 public $date_entered;

	/** 
	 * @var string 
	 */
	 public $date_modified;

	/** 
	 * @var string 
	 */
	 public $id;

	public $relationship_fields = [
	];

}

