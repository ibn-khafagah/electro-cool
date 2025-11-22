<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faqs = [

            [
                'name' => [
                    'ar' => 'ما هو الفرق بين نظام التبريد العادي ونظام الفان كويل؟',
                    'en' => 'What is the difference between a standard cooling system and a fan coil system?',
                ],
                'notes' => [
                    'ar' => '
                        <p>نظام التبريد العادي مثل السبليت يونيت بيكون وحدة مستقلة فيها كمبريسور ومكثف ومبخر داخل نفس الجهاز، وبيستخدم عادة للمساحات الصغيرة.</p>
                        <p>أما <strong>الفان كويل</strong> فهو جزء من نظام تبريد مركزي، وبيتم تزويده بمياه باردة من التشيلر. الفان كويل عبارة عن:</p>
                        <ul>
                            <li>كويل بيمر فيه مياه باردة.</li>
                            <li>مروحة لسحب وتمرير الهواء.</li>
                            <li>فلتر لتنقية الهواء.</li>
                        </ul>
                        <p>وبيكون مناسب أكتر للفنادق، المستشفيات، الشركات، والمولات لأنه بيقدم كفاءة عالية وتوزيع هواء ممتاز.</p>
                    ',
                    'en' => '
                        <p>The standard cooling system (such as split units) is a standalone unit that includes a compressor, condenser, and evaporator in one device, usually suitable for small spaces.</p>
                        <p><strong>Fan coil units</strong>, however, are part of a central cooling system and operate using chilled water supplied from a chiller. A fan coil unit consists of:</p>
                        <ul>
                            <li>A cooling coil with chilled water.</li>
                            <li>A fan to pull and circulate air.</li>
                            <li>A filter to clean the air.</li>
                        </ul>
                        <p>This makes it ideal for hotels, hospitals, offices, and malls due to high efficiency and better air distribution.</p>
                    ',
                ],
            ],

            [
                'name' => [
                    'ar' => 'إزاي أختار قدرة الفان كويل المناسبة للغرفة؟',
                    'en' => 'How do I choose the right fan coil capacity for a room?',
                ],
                'notes' => [
                    'ar' => '
                        <p>اختيار القدرة مش بيعتمد على المساحة فقط، لكن كمان:</p>
                        <ul>
                            <li>عدد الأشخاص في الغرفة.</li>
                            <li>الأجهزة اللي بتولد حرارة.</li>
                            <li>اتجاه الواجهة ودخول الشمس.</li>
                            <li>ارتفاع السقف.</li>
                        </ul>
                        <p>بيتم تحديد القدرة المطلوبة باستخدام حسابات الحمل الحراري، وبعدها بنختار الموديل المناسب من الكتالوج.</p>
                    ',
                    'en' => '
                        <p>Selecting the right capacity depends on more than room size. It also depends on:</p>
                        <ul>
                            <li>The number of people.</li>
                            <li>Heat-generating devices.</li>
                            <li>Sunlight direction and exposure.</li>
                            <li>Ceiling height.</li>
                        </ul>
                        <p>Cooling load calculations are used to determine the proper capacity, then the suitable model is selected.</p>
                    ',
                ],
            ],

            [
                'name' => [
                    'ar' => 'هل الفان كويل مناسب للشقق السكنية؟',
                    'en' => 'Is a fan coil system suitable for residential apartments?',
                ],
                'notes' => [
                    'ar' => '
                        <p>نعم، مناسب جدًا خصوصًا في المشروعات السكنية الحديثة أو الكمباوندات اللي فيها تشيلر مركزي.</p>
                        <p>مميزاته:</p>
                        <ul>
                            <li>مستوى ضوضاء منخفض.</li>
                            <li>إمكانية إخفائه في السقف المستعار.</li>
                            <li>تحكم في كل غرفة بشكل مستقل.</li>
                        </ul>
                    ',
                    'en' => '
                        <p>Yes, it is highly suitable, especially in modern residential projects or compounds with a central chiller.</p>
                        <p>Main advantages:</p>
                        <ul>
                            <li>Low noise level.</li>
                            <li>Can be concealed in a false ceiling.</li>
                            <li>Independent temperature control for each room.</li>
                        </ul>
                    ',
                ],
            ],

            [
                'name' => [
                    'ar' => 'ما هي الصيانة الدورية المطلوبة لوحدات الفان كويل؟',
                    'en' => 'What are the required periodic maintenance tasks for fan coil units?',
                ],
                'notes' => [
                    'ar' => '
                        <p>من أهم أعمال الصيانة:</p>
                        <ul>
                            <li>تنظيف الفلاتر شهريًا.</li>
                            <li>تنظيف الكويل من الأتربة.</li>
                            <li>التأكد من عدم انسداد خط الصرف.</li>
                            <li>فحص حركة المروحة وصوت الموتور.</li>
                        </ul>
                    ',
                    'en' => '
                        <p>Key maintenance tasks include:</p>
                        <ul>
                            <li>Cleaning the air filters monthly.</li>
                            <li>Cleaning dust from the coil.</li>
                            <li>Making sure the drain line is not blocked.</li>
                            <li>Checking the fan motor and any unusual noises.</li>
                        </ul>
                    ',
                ],
            ],

            [
                'name' => [
                    'ar' => 'ليه الهواء الخارج من الفان كويل ضعيف؟',
                    'en' => 'Why is the airflow from the fan coil weak?',
                ],
                'notes' => [
                    'ar' => '
                        <p>قد يكون السبب:</p>
                        <ul>
                            <li>فلتر متسخ.</li>
                            <li>كويل عليه تراكم تراب.</li>
                            <li>سرعة المروحة منخفضة.</li>
                            <li>وجود عوائق أمام مخرج الهواء.</li>
                        </ul>
                    ',
                    'en' => '
                        <p>The reason may be:</p>
                        <ul>
                            <li>Dirty air filter.</li>
                            <li>Dust accumulation on the coil.</li>
                            <li>Fan speed set to low.</li>
                            <li>Obstruction in front of the air outlet.</li>
                        </ul>
                    ',
                ],
            ],

            [
                'name' => [
                    'ar' => 'هل الفان كويل يستهلك كهرباء كتير؟',
                    'en' => 'Does a fan coil unit consume a lot of electricity?',
                ],
                'notes' => [
                    'ar' => '
                        <p>الفان كويل نفسه استهلاكه قليل لأنه مجرد مروحة وكويل، أما الاستهلاك الأكبر بيكون من التشيلر المركزي.</p>
                        <p>النظام ككل بيكون أوفر من تركيب وحدات سبليت كتير.</p>
                    ',
                    'en' => '
                        <p>The fan coil itself consumes very little power since it only includes a fan and a coil. Most energy consumption comes from the central chiller.</p>
                        <p>The system is overall more efficient than installing many split units.</p>
                    ',
                ],
            ],

            [
                'name' => [
                    'ar' => 'هل يمكن التحكم في كل غرفة بشكل مستقل؟',
                    'en' => 'Can each room be controlled separately?',
                ],
                'notes' => [
                    'ar' => '
                        <p>نعم، كل وحدة فان كويل بيكون لها ترموستات مستقل، وتقدر تتحكم في:</p>
                        <ul>
                            <li>درجة الحرارة.</li>
                            <li>سرعة المروحة.</li>
                            <li>وضع التشغيل.</li>
                        </ul>
                    ',
                    'en' => '
                        <p>Yes, each fan coil unit has its own thermostat, allowing control of:</p>
                        <ul>
                            <li>Temperature.</li>
                            <li>Fan speed.</li>
                            <li>Operating mode.</li>
                        </ul>
                    ',
                ],
            ],

            [
                'name' => [
                    'ar' => 'كيف أطلب عرض سعر أو معاينة لنظام الفان كويل؟',
                    'en' => 'How can I request a quotation or site visit for a fan coil system?',
                ],
                'notes' => [
                    'ar' => '
                        <p>للحصول على عرض سعر مناسب، نحتاج:</p>
                        <ul>
                            <li>نوع المشروع.</li>
                            <li>مساحة الغرف.</li>
                            <li>رسومات PDF أو CAD.</li>
                            <li>موقع المشروع.</li>
                        </ul>
                        <p>بعدها فريقنا الفني والمتخصص بيرجعلك بالتفاصيل كاملة.</p>
                    ',
                    'en' => '
                        <p>To prepare an accurate quotation, we need:</p>
                        <ul>
                            <li>Project type.</li>
                            <li>Room dimensions.</li>
                            <li>PDF or CAD drawings.</li>
                            <li>Project location.</li>
                        </ul>
                        <p>Our technical team will then provide full details and recommendations.</p>
                    ',
                ],
            ],

        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
