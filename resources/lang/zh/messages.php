<?php

return [

    /*
    |--------------------------------------------------------------------------
    | All Titles and static string in blade files
    |--------------------------------------------------------------------------
    |
    */
    //menu.blade keys
    'dashboard'       => '仪表盘',
    'job_categories'  => '职位类别',
    'settings'        => '设置',
    'general'         => '通用',
    'profile'         => '轮廓',
    'front_settings'  => '前端设置',
    'social_settings' => '社交设置',
    'about_us'        => '关于我们',
    'footer_settings' => '页脚设置',
    'conversations'   => '对话',
    'my_tickets'      => '我的门票',
    'admins'          => '管理员',

    'common' => [
        'reset_filter'        => '重置过滤器',
        'custom'              => '风俗',
        'from'                => '从',
        'to'                  => '至',
        'apply'               => '申请',
        'this_week'           => '星期',
        'save'                => '保存',
        'cancel'              => '取消',
        'edit'                => 'Edit',
        'delete'              => '删除',
        'action'              => '行动',
        'name'                => '名称',
        'first_name'          => '名字',
        'last_name'           => '姓氏',
        'description'         => '描述',
        'address'             => '地址',
        'phone'               => '电话',
        'password'            => '密码',
        'confirm_password'    => '确认密码',
        'add'                 => '添加',
        'status'              => '状态',
        'view'                => '看法',
        'back'                => '后退',
        'yes'                 => '是',
        'no'                  => '否',
        'created_on'          => '创建于',
        'created_by'          => '创建者',
        'last_updated'        => '最后更新',
        'email'               => '电子邮件',
        'n/a'                 => '不适用',
        'download'            => '下载',
        'report'              => '报告',
        'shortlist'           => '入围',
        'completed'           => '完成',
        'decline'             => '下降',
        'close'               => '关闭',
        'view_more'           => '查看更多',
        'male'                => '男',
        'female'              => '女',
        'active'              => '活动',
        'de_active'           => '无效的',
        'verified'            => '已验证',
        'not_verified'        => '未验证',
        'hi'                  => '嗨',
        'welcome'             => '欢迎',
        'hello'               => 'Hello',
        'login'               => '登录',
        'register'            => '登记',
        'copyright'           => '版权',
        'design_by'           => '由...设计',
        'design_by_name'      => 'InfyOm实验室。',
        'choose_file'         => '选择文件',
        'open'                => '打开',
        'pause'               => '暂停',
        'live'                => '居住',
        'on_hold'             => '等候接听',
        'drafted'             => '草稿',
        'rejected'            => '拒绝了',
        'closed'              => '关闭',
        'paused'              => '已暂停',
        'selected'            => '已选',
        'view_public_profile' => '查看公开资料',
        'view_profile'        => '查看配置文件',
        'applied_on'          => '应用于',
        'choose'              => '选择',
        'color'               => '颜色',
        'in_progreess'        => '进行中',
        'replay'              => '回复',
        'home'                => '家',
        'search'              => '搜索',
        'replied'             => '已回复',
        'on'                  => '上',
        'at'                  => '在',
        '#'                   => '#',
        'all'                 => '全部',
        'comments'            => '评论',
        'for_registration'    => '注册',
        'for_ticket'          => '门票',
        'valid'               => '有效',
        'showing'             => '显示',
        'of'                  => '的',
        'reset'               => '重置',
        'by'                  => '经过',
        'options'             => '选项',
        'deleted'             => '已删除',
        'attention'           => '注意力',
        'are_you_sure_delete' => '确定要删除它',
        'has_been_deleted'    => '已被删除',
        'show_all'            => '显示所有',
        'ok'                  => '好的',
        'empty_data_table'    => '未找到匹配的记录',
        'data_base_entries'   => '显示 _START_ 到 _END_ 个条目，共 _TOTAL_ 个条目',
        'first'               => '第一的',
        'last'                => '最后的',
        'next'                => '下一个',
        'previous'            => '以前的',
        'menu_entry'          => '显示 _MENU_ 条目',
        'no_entry'            => '显示 0 到 0 个条目，共 0 个条目',
        'no_matching'         => '未找到匹配的记录',
        'filter_by'           => '(从 _MAX_ 个总条目中过滤)',
    ],

    // dashboard keys.
    'admin_dashboard' => [
        'total_users'           => '总用户数',
        'total_categorys'       => '总类别',
        'active_users'          => '活跃用户',
        'verified_users'        => '已验证的用户',
        'today_tickets'         => '今日门票',
        'active_tickets'        => '活动门票',
        'open_tickets'          => '公开票证',
        'closed_tickets'        => '封闭门票',
        'in_progress_tickets'   => '进行中的票证',
        'registered_candidates' => '注册代理',
        'recent_agents'         => '最近的代理商',
        'recent_tickets'        => '最近的门票',
        'total_agents'          => '总代理商',
        'total_active_tickets'  => '活动门票总数',
        'tickets_by_categories' => '按类别划分的门票',
        'open_vs_close_ticket'  => '公开票与已关闭票',
        'agent_ticket_chart'    => '代理商门票',
        'select_agent'          => '选择代理',
        'select_category'       => '选择类别',
        'new_vs_close_ticket'   => '新票与封闭票',
        'no_records_found'      => '没有找到记录',
    ],

    // Login
    'login'           => [
        'remember_me'            => '记住我',
        'forgot_password'        => '忘记密码？',
        'admin_login'            => '管理员登录名',
        'enter_email'            => '输入电子邮件',
        'enter_password'         => '输入密码',
        'enter_name'             => '输入名称',
        'enter_first_name'       => '输入名字',
        'enter_last_name'        => '输入姓氏',
        'enter_confirm_password' => '输入确认密码',
        'register'               => '登记',
        'phone'                  => '电话',
        'enter_phone'            => '输入电话',
        'login_via_google'       => '通過Google登錄',
        'login_via_facebook'     => '通過Facebook登錄',
    ],

    'user' => [
        'user'                     => '用户',
        'users'                    => '用户',
        'add_user'                 => '添加用户',
        'edit_user'                => '编辑用户',
        'create_user'              => '创建用户',
        'user_details'             => '用户详细信息',
        'details'                  => '细节',
        'profile'                  => '轮廓',
        'edit_profile'             => '编辑配置文件',
        'change_password'          => '更改密码',
        'logout'                   => '注销',
        'role'                     => '角色',
        'assigned_tickets'         => '已分配的票证',
        'gender'                   => '性别',
        'about'                    => '性别',
        'search_user'              => '搜索用户',
        'no_users_available'       => '没有可用的用户',
        'current_password'         => '当前密码',
        'new_password'             => '新密码',
        'user_not_found'           => '未找到用户',
        'select_customer'          => '选择客户',
        'user_and_ticket'          => '用户及其票证',
        'add_something_about_this' => '添加一些关于这个',
        'select_status'            => '选择状态',
    ],

    'customer' => [
        'customer'               => '客户',
        'customers'              => '客户',
        'search_customer'        => '搜索客户',
        'customer_not_found'     => '未找到客户',
        'no_customers_available' => '无可用客户',
        'edit_customer'          => '编辑客户',
        'customer_details'       => '客户详细信息',
        'customer_and_ticket'    => '客户及其票证',
        'add_customer'           => '添加客户',
    ],

    'custom_status' => [
        'set_a_status' => '设置状态',
        'clear_status' => '清除状态',
    ],

    //notification key
    'notification' => [
        'notification_setting'            => '通知设置',
        'select_first_notification_time'  => '选择第一次通知时间',
        'select_second_notification_time' => '选择第二个通知时间',
        'select_third_notification_time'  => '选择第三次通知时间',
        'notifications'                   => '通知',
        'mark_all_as_read'                => '标记为已读',
        'empty_notifications'             => '我们找不到任何通知',
        'notification_text'               => '如果您将时间设置为 01:05，那么您的通知将在 1 小时 5 分钟后到达。',
    ],

    'email_setting' => [
        'email_setting'                        => '电子邮件设置',
        'get_ticket_updates_through_email'     => '通过电子邮件获取票证更新',
        'send_me_ticket_updates_through_email' => '通过电子邮件向我发送机票更新',
        'email_cases'                          => '电子邮件案例',
    ],

    'ticket' => [
        'ticket'                    => '票',
        'tickets'                   => '门票',
        'add_ticket'                => '添加票证',
        'edit_ticket'               => '编辑票证',
        'create_ticket'             => '创建工单',
        'ticket_details'            => '门票详细信息',
        'view_tickets'              => '查看门票',
        'view_ticket'               => '查看票证',
        'subject'                   => '主题',
        'assigned_to'               => '分配给',
        'search_ticket'             => '搜索票证',
        'ticket_id'                 => '票证编号',
        'ticket_number'             => '机票号码',
        'total_ticket'              => '总票数',
        'ticket_type'               => '门票类型',
        'is_public'                 => '公共票',
        'is_private'                => '私人机票',
        'attachment'                => '附件',
        'contact'                   => '联系人',
        'ticket_no_found'           => '未找到票证',
        'search_tickets'            => '搜索票证',
        'public_tickets'            => '公共票证',
        'tickets_of'                => 'Tickets of',
        'no_found_ticket'           => '公共票证',
        'browse_all_public_tickets' => '浏览所有公共票证',
        'copy_ticket_number'       => '复制票证编号',
        'copied'                   => '已复制',
        'ticket_name'              => '机票名称',
        'submit_ticket'            => '提交票证',
        'no_tickets_available'     => '没有可用的票证',
        'add_new_assign_user'      => '添加新的分配用户',
        'assign_to_agent'          => '分配给代理',
        'ticket_not_found'         => '未找到故障单',
        'open_tickets_of'          => '公开票证',
        'add_reply'                => '添加回复',
        'attachments'              => '附件',
        'ticket_title'             => '票务标题',
        'by_deleting_this_ticket'  => '通过删除此票证将删除其所有数据',
        'type_delete_for_deletion' => '请输入“删除”以删除该故障单',
        'sure_for_change_status'   => '确定要更改“票证状态',
        'edit_assignee'            => '编辑受让人',
        'post_reply'               => '发表回复',
        'unassigned_ticket'        => '未分配的票',
        'unassigned_warning'       => '您确定要从代理处取消分配这张票吗？',
        'unassigned_from_ticket'   => '票取消分配成功',
        'type_replay'              => '键入重播',
        'select_customer'          => '选择客户',
        'select_agents'            => '选择代理',
        'add_ticket_description'   => '添加票证说明',
    ],

    'user_language' => [
        'change_language' => '更改语言',
        'language'        => '语言',
    ],

    // FAQ
    'faq'           => [
        'faq'                     => '常见问题',
        'faqs'                    => '常见问题解答',
        'new_faq'                 => '新常见问题解答',
        'edit_faq'                => '编辑常见问题解答',
        'show_faq'                => '常见问题解答',
        'new_faqs'                => '新常见问题解答',
        'edit_faqs'               => '编辑常见问题解答',
        'title'                   => '标题',
        'description'             => '描述',
        'add'                     => '添加',
        'action'                  => '行动',
        'faq_not_available'       => '没有可用的常见问题解答',
        'no_faqs_found'           => '未找到常见问题解答',
        'faq_details'             => '常見問題詳情',
        'description_placeholder' => '添加常见问题描述或拖放图像',
    ],

    //Settings
    'setting' => [
        'application_name'     => '应用程序名称',
        'logo'                 => '徽标',
        'favicon'              => '网站图标',
        'choose'               => '选择',
        'company_description'  => '公司描述',
        'phone'                => '电话',
        'email'                => '电子邮件',
        'facebook_url'         => 'Facebook网址',
        'twitter_url'          => 'Twitter网址',
        'google_plus_url'      => 'Google Plus网址',
        'linkedIn_url'         => '领英网址',
        'general'              => '通用',
        'front_settings'       => '前端设置',
        'social_settings'      => '社交设置',
        'about_us'             => '关于我们',
        'contact_us'           => '联系我们',
        'address'              => '地址',
        'current_version'      => '当前版本',
        'logo_tooltip'         => '上传 90 x 60 徽标以获得最佳用户体验.',
        'fav_icon_tooltip'     => '图像的像素必须为 16 x 16 和 32 x 32.',
        'default_country_code' => '默认国家代码',
    ],

    //agent
    'agent' => [
        'agent'               => '代理人',
        'agents'              => '代理商',
        'add_agent'           => '添加代理',
        'edit_agent'          => '编辑代理',
        'create_agent'        => '创建代理',
        'agent_details'       => '代理商详细信息',
        'agent_and_ticket'    => '经纪人和他的票',
        'search_agent'        => '搜索代理',
        'no_agents_available' => '没有可用的代理',
        'agent_not_found'     => '未找到代理',
        'not_assigned'        => '未分配',
    ],
    //category
    'category'                     => [
        'category'                 => '类别',
        'categories'               => '类别',
        'add_category'             => '添加类别',
        'edit_category'            => '编辑类别',
        'create_category'          => '编辑类别',
        'category_details'         => '类别详细信息',
        'category_name'            => '类别名称',
        'categories_no_found'      => '未找到类别',
        'categories_not_available' => '类别不可用',
        'search_category'          => '搜索类别',
        'browse_all_categories'    => '浏览所有类别',
        'open_total_ticket'        => '公开票/总票数',
    ],
    //chat files
    'person_image'                 => '人物图像',
    'testimonials'                 => '推荐书',
    'social_login'                 => '社交登录名',
    'block_unblock'                => '阻止解锁',
    'blocked_users'                => '封锁的用户',
    'message_delete'               => '邮件删除',
    'webpush'                      => 'Webpush',
    'online'                       => '在线',
    'offline'                      => '离线',
    'search_messages'              => '搜索消息',
    'search'                       => '搜索',
    'today'                        => '今天',
    'no_conversation_selected_yet' => '尚未选择对话...',
    'no_conversation_added_yet'    => '尚未添加对话...',
    'no_messages_yet'              => '尚无消息...',
    'no_conversation_found'        => '未找到对话...',
    'no_group_found'               => '未找到组...',
    'no_user_found'                => '未找到用户...',
    'no_blocked_user_found'        => '未找到被阻止的用户...',
    'no_blocked_user_available'    => '没有阻止的用户可用...',
    'about'                        => '关于',
    'last_seen_today'              => '最后一次露面: Today',
    'dummy_about'                  => '最后一次露面: Today',
    'dummy_phone_no'               => '(555) 555 55 55',
    'phone'                        => '电话',
    'bio'                          => '生化',
    'media'                        => '媒体',
    'block'                        => '块',
    'unblock'                      => '解除封锁',
    'mute'                         => '静音',
    'new_conversation'             => '新对话',
    'chat'                         => '聊天',
    'create_new_group'             => '新组',
    'enter_group_name'             => '输入组名',
    'enter_group_desc'             => '输入组名',
    'participants'                 => '会员',
    'discription'                  => '说明',
    'no_users_blocked'             => '尚未阻止任何用户...',
    'my_contacts'                  => '我的联系人',
    'start_chat'                   => '开始聊天',
    'no_reply_available'           => '没有可用的回复！',

    'chats'                       => [
        'active_chat'                => '活动聊天',
        'archive_chat'               => '存档聊天',
        'archive'                    => '檔案',
        'archived'                   => '存档',
        'un_archived'                => '未归档',
        'un_archive'                 => '取消歸檔',
        'no_media_found'             => '尚无媒体共享...',
        'toggle'                     => '切换',
        'new_conversations'          => '新对话',
        'assign_to_agent'            => '分配给代理',
        'last_seen_at'               => '最后一次见面',
        'delete_message'             => '删除消息',
        'delete_for_everyone'        => '为所有人删除',
        'info'                       => '信息',
        'read'                       => '读',
        'delivered'                  => '已交付',
        'never'                      => '从不',
        'no_bio_added_yet'           => '尚未添加任何生物...',
        'no_phone_added_yet'         => '尚未添加电话...',
        'remove_member'              => '删除成员',
        'make_admin'                 => '进行管理员',
        'new_message'                => '新消息',
        'user_block'                 => '您已阻止此用户。',
        'chat_request_declined'      => '您已拒绝此用户的聊天请求。',
        'private_conversations'      => '您的私人对话，',
        'wants_to_chat'              => '想和你聊天。',
        'join_private_conversations' => '要在此设备上加入私人对话吗？',
        'accept'                     => '接受',
        'send_request_to_user'       => '您已向该用户发送请求。',
        'start_conversation_with'    => '开始对话',
        'now'                        => '现在',
        'send_chat_request'          => '发送聊天请求',
        'send'                       => '发送',
        'delete_chat'                => '你确定要删除聊天吗',
        'are_you_sure'               => '你确定吗？',
        'unblock_this_user'          => '取消屏蔽此用户？',
        'you_want_unblock_this_user' => '您要取消阻止此用户吗？',
        'you_want_block_this_user'   => '您要屏蔽此用户吗？',
        'chat_with'                  => '和...聊天',
        'type_message'               => '类型消息',
        'conversation_archived'      => '对话已存档',
        'conversation_unarchived'    => '对话已取消归档',
        'conversation_deleted'       => '对话已被删除',
        'message_info'               => '留言信息',
        'text_message'               => '测试消息',
        'read_by'                    => '阅读者',
        'remaining'                  => '其余的',
        'yesterday_at'               => '昨天在',
    ],

    //landing page
    'landing_on'                  => '着陆',
    'infy_chat'                   => 'InfyChat',
    'landing__sub-heading'        => '强大的Laravel聊天解决方案',
    'landing__description'        => '完全集成的功能丰富的Laravel聊天应用程序解决方案，使您的用户能够彼此联系。',
    'buy_now'                     => '立即购买',
    'beautiful_design'            => '美丽的设计',
    'beautiful_design_desc'       => '美观且易于使用的设计可提供最佳体验。',
    'realtime_conversations'      => '实时对话',
    'realtime_conversations_desc' => '功能丰富的实时聊天，例如媒体上传，阅读回执等等。',
    'privacy'                     => '隐私',
    'privacy_desc'                => '隐私权方法。托管在您自己的服务器上，并可以控制您的数据。',
    'easy_installation'           => '简易安装',
    'easy_installation_desc'      => '使用完整的文档轻松安装。只是传统的Laravel安装程序。没什么。',

    //file_pload.blade
    'upload_files'                => '上传文件',
    'upload_image'                => '上传图像',
    'upload'                      => '上传',
    'cancel'                      => '取消',

    //users files
    'new_user'                    => '新用户',
    'edit_user'                   => '编辑用户',
    'is_active'                   => '正在使用',
    'role'                        => '角色',
    'upload_photo'                => '上传照片',
    'save'                        => '保存',

    // Group Related fields
    'group'                       => [
        'groups'       => '团体',
        'create_group' => '新组',
        'edit_group'   => '编辑组',
        'name'         => '群组名称',
        'description'  => '描述',
        'image'        => '图像',
        'type'         => '团体类型',
        'privacy'      => '隐私',
        'open'         => '打开',
        'close'        => '关闭',
        'private'      => '私人',
        'public'       => '上市',
        'members'      => '成员',
        'leave_group'  => '离开组',
        'delete_group' => '删除组',
    ],
    'app_name'                    => '应用程序名称',
    'company_name'                => '公司名称',
    'upload_favicon'              => '上传Favicon图片',
    'upload_logo'                 => '上传徽标',
    'enable_group_chat'           => '启用群聊',

    'report'        => '报告',
    'report_user'   => '报告用户',
    'notes'         => '笔记:',
    'reported_by'   => '报告人',
    'reported_to'   => '已报告给',
    'reported_at'   => '报告日期',
    'reported_user' => '已报告的用户',

    'footer' => [
        'all_right_reserved' => '版权所有',
    ],

    // Web
    'web'    => [
        'how_can_we_help_you'     => '我们该怎样帮助你？',
        'welcome_to'              => '欢迎来到',
        'already_have_an_account' => '已经有一个帐户？',
        'search_public_ticket'    => '搜索公众票',
        'type_message'            => '输入消息',
        'enter_mail'              => '输入邮件',
        'enter_name'              => '输入名称',
        'enter_ticket_title'      => '输入工单标题',
        'password'                => [
            'confirm_your_password_before_continuing' => '请在继续之前确认您的密码。',
            'forgot_your_password'                    => '忘记密码了吗？',
            'reset_password'                          => '重设密码',
            'send_reset_link'                         => '发送重置链接',
            'recalled_your_login_info'                => '召回了您的登录信息？',
            'sign_in'                                 => '登入',
            'set_a_new_password'                      => '设置新密码',
            'forgot_password'                         => '忘记密码',
        ],
    ],

    'months'   =>
        array(
            'jan' => '简',
            'feb' => '二月',
            'mar' => '三月',
            'apr' => '四月',
            'may' => '可能',
            'jun' => '君',
            'jul' => '八月',
            'aug' => '九月',
            'sep' => '十月',
            'oct' => '十一月',
            'nov' => '十二月',
            'dec' => '太阳',
        ),
    'weekdays' => [
        'sun' => '太阳',
        'mon' => '星期一',
        'tue' => '周二',
        'wed' => '星期三',
        'thu' => '周四',
        'fri' => '周五',
        'sat' => '星期六',
    ],

    'filter_days' => [
        'today'      => '今天',
        'this_week'  => '本星期',
        'last_week'  => '上周',
        'this_month' => '这个月',
        'last_month' => '上个月',
        'this_year'  => '今年',
    ],

    'validation' => [
        'file_size'                    => '文件大小应小于 10 MB',
        'email_valid'                  => '请输入有效电子邮件',
        'required_field'               => '字段为必填项。',
        'white_space'                  => '字段不仅包含空格。',
        'color_required'               => '请选择您的颜色。',
        'ticket_reply_required'        => '工单回复是必填字段。',
        'ticket_reply_white_space'     => '工单回复不仅仅包含空格。',
        'title_required'               => '标题字段是必需的。',
        'title_white_space'            => '标题字段不仅包含空格。',
        'image_type_valid'             => '图像必须是以下类型的文件：gif、ico、png。',
        'facebook_url'                 => '请输入有效的 Facebook 网址',
        'twitter_url'                  => '请输入有效的 推特 网址',
        'linkedin_url'                 => '请输入有效的领英网址',
        'application_name_white_space' => '应用程序名称不应仅包含空格。',
        'about_us_white_space'         => '关于我们不应该只包含空白。',
        'address_white_space'          => '地址不应仅包含空格。',
        'all_field_required'           => '请填写所有必填字段。',
    ],

    'swal_message' => [
        'delete'              => '删除 ！',
        'file_delete'         => '文件已被删除。',
        'sure_file_delete'    => '您确定要删除此“文件”吗？',
        'reply_are_you_sure'  => '您确定要删除此“回复”吗？',
        'reply_delete'        => '回复已被删除。',
        'updated'             => '更新！',
        'status_changed'      => '状态已更改',
        'chat_message_delete' => '留言已被删除 !',
        'message'             => '信息',
    ],

    'toast_message' => [
        'ticket_agent_update' => '票务代理更新成功',
    ],


    'placeholder' => [
        'add_ticket_reply'   => '添加工单回复...',
        'processing'         => '加工...',
        'translation'        => '翻译经理',
        'new_language'       => '新语言',
        'verify_user_email'  => '验证用户电子邮件',
        'edit_ticket_agents' => '编辑票务代理',
        'options'            => '选项',

    ],

    'email_notification' => [
        'making_ticket'        => '用户出票时通过电子邮件通知',
        'assigned_ticket'      => '分配给您的票证将通过电子邮件通知',
        'create_ticket'        => '您创建工单成功将通过电子邮件通知',
        'receive_reply_ticket' => '收到机票回复，然后将通过电子邮件通知您',
    ],

    'success_message' => [
        'category_save'         => '类别保存成功',
        'category_update'       => '类别更新成功。',
        'category_delete'       => '类别删除成功。',
        'ticket_update'         => '票证更新成功。',
        'ticket_create'         => '工单创建成功。',
        'ticket_status'         => '工单状态更新成功',
        'ticket_unassigned'     => '成功取消分配工单',
        'faq_save'              => '常见问题已成功保存。',
        'faq_update'            => '常见问题更新成功。',
        'faq_delete'            => '常见问题已成功删除。',
        'image_upload'          => '图片上传成功',
        'setting_update'        => '设置更新成功。',
        'attachment_delete'     => '附件删除成功。',
        'attachment_has_delete' => '附件已成功删除。',
        'file_delete'           => '文件已成功删除。',
        'reply_create'          => '回复创建成功。',
        'reply_update'          => '回复更新成功。',
        'reply_delete'          => '回复已成功删除。',
        'ticket_reply'          => '工单回复更新成功',
        'language_add'          => '语言添加成功。',
        'customer_create'       => '客户创建成功',
        'customer_update'       => '客户更新成功',
        'agent_create'          => '代理创建成功',
        'agent_update'         => '代理更新成功',
        'user_delete'          => '用户删除成功。',
        'password_update'      => '密码更新成功。',
        'language_update'      => '语言更新成功。',
        'profile_update'       => '配置文件更新成功。',
        'email_setting_update' => '电子邮件设置已成功更新',
        'notification'         => '通知读取成功。',
        'all_notification'     => '所有通知读取成功。',
        'status_update'        => '状态更新成功。',
        'user_create'          => '用户创建成功。',
        'user_email_verify'    => '用户电子邮件已成功验证。',
        'success'              => '成功',
    ],

    'error_message' => [
        'error'                 => '错误',
        'category_delete'       => '无法删除类别。',
        'ticket_not_editable'   => '关闭工单不可编辑',
        'attachment_not_delete' => '您无法删除此附件',
    ],

    'admin' => [
        'add_admin'                  => '添加管理员',
        'edit_admin'                 => '编辑管理员',
        'admin_details'              => '管理员详情',
        'first_name'                 => '名字',
        'last_name'                  => '姓',
        'email'                      => '电子邮件',
        'password'                   => '密码',
        'confirm_password'           => '确认密码',
        'male'                       => '男性',
        'female'                     => '女性',
        'profile_details'            => '个人资料详情',
        'avatar'                     => '阿凡达',
        'full_name'                  => '全名',
        'contact_number'             => '联系电话',
        'gender'                     => '性别',
        'profile'                    => '轮廓',
        'admin'                      => '行政',
        'admin_created_successfully' => '管理员创建成功。',
        'admin_updated_successfully' => '管理员更新成功。',
    ],

];
