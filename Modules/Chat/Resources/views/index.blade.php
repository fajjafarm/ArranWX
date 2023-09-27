<x-app-layout layout="chat" :assets="$assets ?? []"  :groupImages="false" >

<div class="tab-content" id="myTabContent">
    <div class="card tab-pane mb-0 fade show active" id="user-content-101" role="tabpanel">
    <x-modules.chat.widgets.chat-header userName="Ellyse Perry" userProfileImg="avatar/03.png" status="Online" statusidentify="online" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>


            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message='Hey, how are you??' />

            <x-modules.chat.widgets.left-chat username="Ellyse Perry" messageTime="16:40" userImg="avatar/03.png" message='Hey, I am looking for the best dashboard template. Could you please help me to find it out?'/>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message='Absolutely Yes! Hope-UI is the Responsive Bootstrap 5 Admin Dashboard Template.' />

            <x-modules.chat.widgets.left-chat username="Ellyse Perry" messageTime="17:00" userImg="avatar/03.png" message='Looks clean and fresh UI.'/>
            <x-modules.chat.widgets.left-chat username="Ellyse Perry" messageTime="17:01" userImg="avatar/03.png" message='I will purchase it for sure.'/>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message='Ok Cool!!'/>

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' groupImages='true' />

            <x-modules.chat.widgets.left-chat username="Ellyse Perry" messageTime="12:00" userImg="avatar/03.png" message='This are nice pics.' />
            <x-modules.chat.widgets.left-chat username="Ellyse Perry" messageTime="12:05" userImg="avatar/03.png" message='I want some teachnic for fast code can you help?' />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message='Yes' />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Ellyse Perry" messageTime="15:00" userImg="avatar/03.png" Image='true' singleImage='true'  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
    <div class="card tab-pane mb-0 fade" id="user-content-102" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Faf Du Plessis" userProfileImg="avatar/01.png" status="Last seen 10 min ago" statusidentify="offline" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message='Hey, how are you??' />

            <x-modules.chat.widgets.left-chat username="Faf Du Plessis" messageTime="16:40" userImg="avatar/01.png" message="I want some teachnic for fast code can you help?" />
            <x-modules.chat.widgets.left-chat username="Faf Du Plessis" messageTime="16:40" userImg="avatar/01.png" message="How can we help? We're here for you!"/>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message="Lorem ipsum dolor sit" />

            <x-modules.chat.widgets.left-chat username="Faf Du Plessis" messageTime="17:00" userImg="avatar/01.png" Image='true' groupImages='true' />
            <x-modules.chat.widgets.left-chat username="Faf Du Plessis" messageTime="17:01" userImg="avatar/01.png" message="Howz this all images??" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message="Nice!" />

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' singleImage='true' />

            <x-modules.chat.widgets.left-chat username="Faf Du Plessis" messageTime="12:00" userImg="avatar/01.png" message="Nice place for holiday." />
            <x-modules.chat.widgets.left-chat username="Faf Du Plessis" messageTime="12:05" userImg="avatar/01.png" message="Where is this place came?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message="This place name is devi pada." />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Faf Du Plessis" messageTime="15:00" userImg="avatar/01.png" message="Okay, I will visit this place."  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
    <div class="card tab-pane mb-0 fade" id="user-content-103" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Brendon McCullum" userProfileImg="avatar/04.png" status="last seen 2 min ago" statusidentify="offline" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message="Hey, how are you??" />

            <x-modules.chat.widgets.left-chat username="Brendon McCullum" messageTime="16:40" userImg="avatar/04.png" message="Hey, I am looking for the best dashboard template. Could you please help me to find it out?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message="Absolutely Yes! Hope-UI is the Responsive Bootstrap 5 Admin Dashboard Template." />

            <x-modules.chat.widgets.left-chat username="Brendon McCullum" messageTime="17:00" userImg="avatar/04.png" message="Looks clean and fresh UI." />
            <x-modules.chat.widgets.left-chat username="Brendon McCullum" messageTime="17:01" userImg="avatar/04.png" message="I will purchase it for sure." />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message="Ok Cool!!" />

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' groupImages='true' />

            <x-modules.chat.widgets.left-chat username="Brendon McCullum" messageTime="12:00" userImg="avatar/04.png" message="This are nice pics." />
            <x-modules.chat.widgets.left-chat username="Brendon McCullum" messageTime="12:05" userImg="avatar/04.png" message="I want some teachnic for fast code can you help?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message="Yes" />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Brendon McCullum" messageTime="15:00" userImg="avatar/04.png" Image='true' singleImage='true'  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
    <div class="card tab-pane mb-0 fade" id="user-content-104" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Wade Johnson" userProfileImg="avatar/06.png" status="last seen 15 min ago" statusidentify="offline" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message="Hey, how are you??" />

            <x-modules.chat.widgets.left-chat username="Wade Johnson" messageTime="16:40" userImg="avatar/06.png" message="Hey, I am looking for the best dashboard template. Could you please help me to find it out?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message="Absolutely Yes! Hope-UI is the Responsive Bootstrap 5 Admin Dashboard Template." />

            <x-modules.chat.widgets.left-chat username="Wade Johnson" messageTime="17:00" userImg="avatar/06.png" message="Looks clean and fresh UI." />
            <x-modules.chat.widgets.left-chat username="Wade Johnson" messageTime="17:01" userImg="avatar/06.png" message="I will purchase it for sure." />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message="Ok Cool!!" />

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' groupImages='true' />

            <x-modules.chat.widgets.left-chat username="Wade Johnson" messageTime="12:00" userImg="avatar/06.png" message="This are nice pics." />
            <x-modules.chat.widgets.left-chat username="Wade Johnson" messageTime="12:05" userImg="avatar/06.png" message="I want some teachnic for fast code can you help?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message="Yes" />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Wade Johnson" messageTime="15:00" userImg="avatar/06.png" Image='true' singleImage='true'  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
    <div class="card tab-pane mb-0 fade" id="user-content-105" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Arlene Cyrus" userProfileImg="avatar/05.png" status="Online" statusidentify="online" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message="Hey, how are you??" />

            <x-modules.chat.widgets.left-chat username="Arlene Cyrus" messageTime="16:40" userImg="avatar/05.png" message="I want some teachnic for fast code can you help?" />
            <x-modules.chat.widgets.left-chat username="Arlene Cyrus" messageTime="16:40" userImg="avatar/05.png" message="How can we help? We're here for you! " />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message="Lorem ipsum dolor sit" />

            <x-modules.chat.widgets.left-chat username="Arlene Cyrus" messageTime="17:00" userImg="avatar/05.png" Image='true' groupImages='true' />
            <x-modules.chat.widgets.left-chat username="Arlene Cyrus" messageTime="17:01" userImg="avatar/05.png" message="Howz this all images??" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message="Nice!" />

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' singleImage='true' />

            <x-modules.chat.widgets.left-chat username="Arlene Cyrus" messageTime="12:00" userImg="avatar/05.png" message="Nice place for holiday." />
            <x-modules.chat.widgets.left-chat username="Arlene Cyrus" messageTime="12:05" userImg="avatar/05.png" message="Where is this place came?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message="This place name is devi pada." />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Arlene Cyrus" messageTime="15:00" userImg="avatar/05.png" message="Okay, I will visit this place."  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
    <div class="card tab-pane mb-0 fade" id="user-content-106" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Darlene Warner" userProfileImg="avatar/09.png" status="Online" statusidentify="online" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message="Hey, how are you??" />

            <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="16:40" userImg="avatar/09.png" message="Hey, I am looking for the best dashboard template. Could you please help me to find it out?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message="Absolutely Yes! Hope-UI is the Responsive Bootstrap 5 Admin Dashboard Template." />

            <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="17:00" userImg="avatar/09.png" message="Looks clean and fresh UI." />
            <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="17:01" userImg="avatar/09.png" message="I will purchase it for sure." />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message="Ok Cool!!" />

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' groupImages='true' />

            <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="12:00" userImg="avatar/09.png" message="This are nice pics." />
            <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="12:05" userImg="avatar/09.png" message="I want some teachnic for fast code can you help?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message="Yes" />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Darlene Warner" messageTime="15:00" userImg="avatar/09.png" Image='true' singleImage='true'  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
    <div class="card tab-pane mb-0 fade" id="user-content-107" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Jenny Wilson" userProfileImg="avatar/11.png" status="last seen 1hr ago" statusidentify="offline" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message="Hey, how are you??" />

            <x-modules.chat.widgets.left-chat username="Jenny Wilson" messageTime="16:40" userImg="avatar/11.png" message="I want some teachnic for fast code can you help?" />
            <x-modules.chat.widgets.left-chat username="Jenny Wilson" messageTime="16:40" userImg="avatar/11.png" message="How can we help? We're here for you! " />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message="Lorem ipsum dolor sit" />

            <x-modules.chat.widgets.left-chat username="Jenny Wilson" messageTime="17:00" userImg="avatar/11.png" Image='true' groupImages='true' />
            <x-modules.chat.widgets.left-chat username="Jenny Wilson" messageTime="17:01" userImg="avatar/11.png" message="Howz this all images??" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message="Nice!" />

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' singleImage='true' />

            <x-modules.chat.widgets.left-chat username="Jenny Wilson" messageTime="12:00" userImg="avatar/11.png" message="Nice place for holiday." />
            <x-modules.chat.widgets.left-chat username="Jenny Wilson" messageTime="12:05" userImg="avatar/11.png" message="Where is this place came?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message="This place name is devi pada." />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Jenny Wilson" messageTime="15:00" userImg="avatar/11.png" message="Okay, I will visit this place."  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
    <div class="card tab-pane mb-0 fade" id="user-content-108" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Devon Lane" userProfileImg="avatar/12.png" status="Online" statusidentify="online" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message="Hey, how are you??" />

            <x-modules.chat.widgets.left-chat username="Devon Lane" messageTime="16:40" userImg="avatar/12.png" message="I want some teachnic for fast code can you help?" />
            <x-modules.chat.widgets.left-chat username="Devon Lane" messageTime="16:40" userImg="avatar/12.png" message="How can we help? We're here for you! " />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message="Lorem ipsum dolor sit" />

            <x-modules.chat.widgets.left-chat username="Devon Lane" messageTime="17:00" userImg="avatar/12.png" Image='true' groupImages='true' />
            <x-modules.chat.widgets.left-chat username="Devon Lane" messageTime="17:01" userImg="avatar/12.png" message="Howz this all images??" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message="Nice!" />

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' singleImage='true' />

            <x-modules.chat.widgets.left-chat username="Devon Lane" messageTime="12:00" userImg="avatar/12.png" message="Nice place for holiday." />
            <x-modules.chat.widgets.left-chat username="Devon Lane" messageTime="12:05" userImg="avatar/12.png" message="Where is this place came?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message="This place name is devi pada." />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Devon Lane" messageTime="15:00" userImg="avatar/12.png" message="Okay, I will visit this place."  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
    <div class="card tab-pane mb-0 fade" id="user-content-109" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Christopher" userProfileImg="avatar/08.png" status="Last seen 29 Jan,2021" statusidentify="Offline" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message="Hey, how are you??" />

            <x-modules.chat.widgets.left-chat username="Christopher" messageTime="16:40" userImg="avatar/08.png" message="Hey, I am looking for the best dashboard template. Could you please help me to find it out?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message="Absolutely Yes! Hope-UI is the Responsive Bootstrap 5 Admin Dashboard Template." />

            <x-modules.chat.widgets.left-chat username="Christopher" messageTime="17:00" userImg="avatar/08.png" message="Looks clean and fresh UI." />
            <x-modules.chat.widgets.left-chat username="Christopher" messageTime="17:01" userImg="avatar/08.png" message="I will purchase it for sure." />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message="Ok Cool!!" />

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' groupImages='true' />

            <x-modules.chat.widgets.left-chat username="Christopher" messageTime="12:00" userImg="avatar/08.png" message="This are nice pics." />
            <x-modules.chat.widgets.left-chat username="Christopher" messageTime="12:05" userImg="avatar/08.png" message="I want some teachnic for fast code can you help?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message="Yes" />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Christopher" messageTime="15:00" userImg="avatar/08.png" Image='true' singleImage='true'  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
    <div class="card tab-pane mb-0 fade" id="user-content-110" role="tabpanel">
        <x-modules.chat.widgets.chat-header userName="Rachel Green" userProfileImg="avatar/07.png" status="Online" statusidentify="online" />
        <div class="card-body chat-body bg-body">
            <div class="chat-day-title">
                <span class="main-title">Feb 1,2021</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:34" userImg="avatar/02.png" message="Hey, how are you??" />

            <x-modules.chat.widgets.left-chat username="Rachel Green" messageTime="16:40" userImg="avatar/07.png" message="I want some teachnic for fast code can you help?" />
            <x-modules.chat.widgets.left-chat username="Rachel Green" messageTime="16:40" userImg="avatar/07.png" message="How can we help? We're here for you! " />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="16:42" userImg="avatar/02.png" message="Lorem ipsum dolor sit" />

            <x-modules.chat.widgets.left-chat username="Rachel Green" messageTime="17:00" userImg="avatar/07.png" Image='true' groupImages='true' />
            <x-modules.chat.widgets.left-chat username="Rachel Green" messageTime="17:01" userImg="avatar/07.png" message="Howz this all images??" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="17:10" userImg="avatar/02.png" message="Nice!" />

            <div class="chat-day-title">
                <span class="main-title">Today</span>
            </div>

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="08:00" userImg="avatar/02.png" Image='true' singleImage='true' />

            <x-modules.chat.widgets.left-chat username="Rachel Green" messageTime="12:00" userImg="avatar/07.png" message="Nice place for holiday." />
            <x-modules.chat.widgets.left-chat username="Rachel Green" messageTime="12:05" userImg="avatar/07.png" message="Where is this place came?" />

            <x-modules.chat.widgets.right-chat username="Ross Taylor" messageTime="13:10" userImg="avatar/02.png" message="This place name is devi pada." />
            <div></div>
            <x-modules.chat.widgets.left-chat username="Rachel Green" messageTime="15:00" userImg="avatar/07.png" message="Okay, I will visit this place."  />
        </div>
        <x-modules.chat.widgets.chat-footer />
    </div>
</div>
</x-app-layout>
